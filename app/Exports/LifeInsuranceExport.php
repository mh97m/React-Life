<?php

namespace App\Exports;

use App\Http\Resources\LifeInsuranceResource;
use App\Models\LifeInsurance;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;


class LifeInsuranceExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents /* FromQuery, WithColumnFormatting */
{
    /**
     *  LifeInsuranceExport constructor
     */
    public function __construct(private int $id)
    {
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return new LifeInsuranceResource(LifeInsurance::where([
            'id'=> $this->id,
            'user_id' => auth()->user()->id
            ])->get());
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'آیدی', 'کد ملی', 'شماره موبایل بیمه شده', 'نسبت', 'تاریخ تولد', 'مدت بیمه نامه', 'عنوان شغل اول', 'عنوان شغل دوم',
            'روش پرداخت', 'مبلغ پرداختی سال اول', 'مبلغ پرداختی قسط اول', 'افزایش سالانه حق بیمه', 'نحوه پرداخت حق بیمه پوشش های اضافی', 'سرمایه فوت به هر علت',
            'افزایش سالانه سرمایه', 'فوت بر اثر حادثه', 'نقص عضو و از کارافتادگی', 'هزینه پزشکی ناشی از حادثه', 'بسته تکمیلی خطرات اضافی', 'غرامت بستری',
            'معافیت از پرداخت حق بیمه', 'امراض خاص', 'قد بیمه شده', 'وزن بیمه شده', 'جنسیت بیمه شده', 'وضعیت خدمت سربازی',
            'جزئیات معافیت', 'علت معافیت', 'وضعیت پدر', 'سن پدر', 'علت فوت پدر', 'وضعیت مادر',
            'سن مادر', 'علت فوت مادر', 'سابقه بیماری افراد خانواده', 'توضیحات سابقه بیماری خانوادگی', 'استعمال دخانیات', 'سابقه بستری و یا جراحی قبلی',
            'دلیل بستری شدن', 'سابقه جسمانی', 'مصرف روزانه دارو', 'وضعیت سلامتی فعلی', 'ابتلا به بیماری', 'کاهش/افزایش وزن',
            'توضیحات تکمیلی کاهش/افزایش وزن',
        ];
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($insurance): array
    {
        return [
            $insurance->id, $insurance->national_code, $insurance->mobile_number, $insurance->insurance_target, $insurance->birth_year . '/' . $insurance->birth_month . '/' . $insurance->birth_day, $insurance->life_ins_duration, $insurance->first_job_level, $insurance->second_job_level,
            $insurance->payment_method, $insurance->annual_payment, $insurance->divided_payment, $insurance->annual_payment_increase, $insurance->addon_payment_method, $insurance->death_capital_any_reason_ratio,
            $insurance->capital_increase, $insurance->death_capital_incident_ratio, $insurance->maim_ratio, $insurance->has_medical_cost, $insurance->additional_dangers, $insurance->hospitalization,
            $insurance->exemption, $insurance->special_diseases_ratio, $insurance->ins_target_height, $insurance->ins_target_weight, $insurance->gender, $insurance->military_service_status,
            $insurance->military_service_details, $insurance->military_service_reason, $insurance->father_life_status, $insurance->father_age, $insurance->father_death_reason, $insurance->mother_life_status,
            $insurance->mother_age, $insurance->mother_death_reason, $insurance->family_health_history, $insurance->family_health_history_reason, $insurance->smoking_status, $insurance->hospitalization_status,
            $insurance->hospitalization_reason, $insurance->physical_impairment, $insurance->drug_usage, $insurance->health_status, $insurance->disease_type, $insurance->weight_loss,
            $insurance->weight_loss_reason,
            // Date::dateTimeToExcel($insurance->birthday),
            // $insurance->company->name,
        ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        $styleArray = ['font' => ['bold' => true]];
        return [
            AfterSheet::class => function (AfterSheet $event) use ($styleArray) {

                // bold heading
                $event->sheet->getStyle('1')->applyFromArray($styleArray);

                // change direction to rtl
                $event->sheet->setRightToLeft(true);

                // center all text
                $event->sheet->getStyle("1")->getAlignment()->setHorizontal('center');
                $event->sheet->getStyle("2")->getAlignment()->setHorizontal('center');

                //paint cells
                $event->sheet->getStyle('1')->applyFromArray(
                    [
                        'borders' => [
                            'outline' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHED,
                            ],
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                            'startColor' => [
                                'argb' => 'FFA0A0A0',
                            ],
                            'endColor' => [
                                'argb' => 'FFFFFFFF',
                            ],
                        ],
                    ]
                );
            },
        ];
    }

    // /**
    //  * @return Builder
    //  */
    // public function query()
    // {
    //     return new LifeInsuranceResource(LifeInsurance::query()
    //         ->where('id', $this->id)
    //         ->get());
    // }

    // /**
    // * @return array
    // */
    // public function columnFormats(): array
    // {
    //     return [
    //         'C' => NumberFormat::FORMAT_DATE_YYYYMMDD,
    //         'F' => NumberFormat::FORMAT_DATE_YYYYMMDD,
    //     ];
    // }

}
