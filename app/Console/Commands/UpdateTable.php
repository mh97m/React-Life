<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class UpdateTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:table {table : The Name of the table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update a table of database';

    /**
     * The tables that you want to update with url.
     *
     * @var array
     */
    protected $urls = [
        'Agencies' => 'api/BimeApi/v2.0/Common/units',
        'Colors' => 'Api/BimeApi/v2.0/common/base-info/colors',
        'Provinces' => 'Api/BimeApi/v2.0/common/base-info/Provinces',
        'Answers' => 'Api/BimeApi/v2.0/common/code-list/ans',
        'Responses' => 'Api/BimeApi/v2.0/common/code-list/has',
        'Companies' => 'Api/BimeApi/v2.0/common/code-list/insurance-corp',
        'Fields' => 'Api/BimeApi/v2.0/common/base-info/insurance-lines',
        'Jobs' => 'Api/BimeApi/v2.0/life/base-info/valid-jobs',
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $table_name = ucfirst(strtolower($this->argument('table')));

        fanAvaranLog('info', [
            'message' => 'Update "' . $table_name . '" table started',
            'channel' => 'update_database'
        ]);

        try {
            # Get url of table from input
            $url = isset($this->urls[$table_name]) ? $this->urls[$table_name] : null;
            if (!$url) {
                throw new \Exception("Url not defiend for this table or table not exists");
            }

            # Get items of api call and change to format of resource's table
            $resource_name = 'App\\Http\\Resources\\' . $table_name;
            $items = $resource_name::collection(fanAvaranCallApi($url, 'get')['data']) ?? new Collection();

            # Get records of database table
            $model_name = 'App\\Models\\' . Str::singular($table_name);
            $records = $model_name::get()->keyBy('fanavaran_id');

            # Progress bar initiated
            $bar = $this->output->createProgressBar(count($items));
            $bar->start();

            # Check each item for create or update
            $items->filter(function ($item) use (&$records ,$model_name ,$bar) {
                # Increase the progress bar
                $bar->advance();

                # Prepare array of item for compare to record or insert to database
                $item_array = $item->toArray($item->resource);
                if($item_array) {
                    $counter = 0;
                    $records_count = count($records);
                    # Iterate on records of database
                    foreach ($records as $record) {
                        # Check existance of item
                        if ($record->fanavaran_id == $item_array['fanavaran_id']) {
                            # Check difference of item
                            if($item_array != $record->toArray()){
                                $record->update($item_array);
                            }
                            $records->forget($record->fanavaran_id);
                            break;
                        } else {
                            $counter += 1;
                        }
                    }
                    # Check if item not found in databse
                    if ($records_count == $counter) {
                        $model_name::create($item_array);
                    }
                }
            });

            # Delete records that not found in api call
            foreach ($records as $key => $value) {
                $record = $records->where('fanavaran_id', $key)->first();
                $record->delete();
            }

            # Progress bar completed
            $bar->finish();
        } catch (\Exception $e) {
            fanAvaranLog('error', [
                'error' => $e,
                'message' => 'Update "' . $table_name . '" table unsuccessful!',
                'channel' => 'update_database'
            ]);
            $this->newLine();
            $this->error('"' . $table_name . '" table not Updated');
            return Command::FAILURE;
        }

        fanAvaranLog('info', [
            'message' => 'Update "' . $table_name . '" table ended',
            'channel' => 'update_database'
        ]);
        $this->newLine();
        $this->info('"' . $table_name . '" table has been Updated');
        return Command::SUCCESS;
    }
}
