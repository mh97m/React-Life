<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>پی دی اف</title>
    {{-- <link rel="stylesheet" type="text/css" href="/pdf-export-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/pdf-export-assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/pdf-export-assets/css/app.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ public_path('pdf-export-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ public_path('pdf-export-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ public_path('pdf-export-assets/css/app.css') }}">
</head>

<body style="margin: 0 0 90px 0;padding: 0;direction: rtl;text-align: right;font-family: 'iransans';width: 100%;">
    <div style="width: 100%;">
        <table
            style="page-break-inside: avoid;position: relative;width: 100%;border-right-color: transparent;border-radius: 20px;display: block;">
            <tbody style="display: block;position: relative;width: 100%;">
                <tr style="display: block;position: relative;width: 100%;padding-left: 30px;padding-right: 30px;">
                    <td style="display: block;">
                        <div style="clear: both;display: block;margin-right: 34px;">
                            <div style="width: 25%;float: left;position: relative;min-height: 1px;">
                                <img src="{{ public_path('pdf-export-assets/images/logo-left.png') }}"
                                    style="max-height: 35px;float: left;margin-left: 20px;margin-top: 30px;" alt="">
                            </div>
                            <div style="width: 50%;padding-left: 39px;float: left;min-height: 1px;position: relative;">
                                <h1
                                    style="text-align: center;font-size: 15px;font-weight: bold;display: block;margin: 38px auto 16px auto;line-height: 28px;">
                                    <span style="border-bottom: 1.8px solid #000000;display: inline-block;">فرم پیشنهاد
                                        صدور بیمه جامع عمر و پس انداز</span>
                                </h1>
                            </div>
                            <div style="width: 25%;padding-left: 15px;float: left;min-height: 1px;position: relative;">
                                <img src="{{ public_path('pdf-export-assets/images/apple.png') }}"
                                    style="max-height: 35px;float: right;margin-right: -12px;margin-top: 29px;" alt="">
                            </div>
                        </div>
                        <div
                            style="font-size: 10px;margin-bottom: 0;clear: both;display: block;padding: 0 5px;color: #000000;line-height: 16px;">
                            بیمه گذار محترم،بیمه آسیا برای ارائه خدمات بهتر و جلب رضایت شما مشتریان عزیز توصیه می نماید
                            با مطالعه مفاد این پرسشنامه و آگاهی کامل از شرایط بیمه نامه و تعهدات قرارداد،اقدام به خرید
                            نمایید.
                            لذا خواهشمند است
                            <p style="font-weight: bold;display: inline-block;margin-bottom: 0;">
                                پاسخ کلیه سوالات احتمالی خود را از همکاران این شرکت دریافت و متعاقب آن تصمیم گیری
                                نمایید.
                            </p>
                        </div>
                        <div style="clear: both;display: table;width: 100%;margin-top: 4px;font-size: 10px;">
                            <div style="width: 25%;position: relative;min-height: 1px;float: left;">
                                <span style="float: right;display: inline-block;margin-right: 26px;">تاریخ تکمیل</span>
                                <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                <span
                                    style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 2px 0 1px;text-align: center;"></span>
                                <span style="float: right;display: inline-block;">/</span>
                                <span
                                    style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 1px 0 1px;text-align: center;"></span>
                                <span style="float: right;display: inline-block;">/</span>
                                <span
                                    style="border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;margin: 6px 2px 0 4px;text-align: center;"></span>
                            </div>
                            <div style="width: 50%;position: relative;min-height: 1px;float: left;font-weight: bold;">
                                <div style="text-align: center;">
                                    (این فرم لازم است بدون خط خوردگی توسط بیمه گذار و بیمه شده تکمیل گردد.)
                                </div>
                            </div>
                            <div style="width: 25%;position: relative;min-height: 1px;float: left;">
                                <span style="float: right;display: inline-block;margin-right: 4px;margin-top: 1px;"> کد
                                    رایانه</span>
                                <span
                                    style="float: right;display: inline-block;border: 1px solid #000000;width: 100px;height: 17px;margin: 0 8px 0 2px;border-radius: 2px;"></span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;margin-top: 5px;font-size: 10px;">
                        <div
                            style="margin-right: 30px;padding: 0 5px 10px 5px;color: #000000;border: 1px solid #000000;display: block;">
                            <span
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;">مشخصات
                                بیمه گذار</span>
                            <div style="clear: both;display: table;width: 100%;">
                                <div style="width: 60%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="float: left;display: block;border: 1px solid #0a083b;margin-top: -1px;border-top-width: 2px;">
                                        <div>
                                            <table
                                                style="padding: 0;display: table;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                <tbody>
                                                    <tr>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;border-left: 1px solid #0a083b;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #000000;">
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;border-left: 1px solid #0a083b;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="width: 40%;position: relative;min-height: 1px;float: left;text-align: right;margin-top: 5px;">
                                    <span style="float: right;display: inline-block;">نام خانوادگی</span>
                                    <span style="float: right;display: inline-block;margin: 0 1px;">/</span>
                                    <span style="float: right;display: inline-block;">شرکت</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 66%;float: right;display: inline-block;margin-top: 6px; margin-right: 1px;text-align: center;"></span>
                                    <div style="margin-top: 25px;display: table;width: 100%;">
                                        <span style="float: right;display: inline-block;">نام</span>
                                        <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                        <span
                                            style="border-bottom: dotted 2px #184727;width: 92%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;"></span>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 16%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">جنسیت</span>
                                    <span style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                    <span style="float: right;display: inline-block;">زن</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 5px;">مرد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                </div>
                                <div style="width: 10%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">تابعیت</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-right: 5px;border-bottom: dotted 2px #184727;width: 37%;min-width: 31%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 22%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">محل تولد</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 61%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                </div>
                                <div style="width: 16%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">نام پدر</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 62%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                </div>
                                <div style="width: 21%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">شماره شناسنامه</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 50%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                                <div style="width: 15%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تاریخ تولد</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 2px 0 0px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;margin-left: 1px;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;margin-top: 6px;float: right;display: inline-block;text-align: center;margin-left: 0px;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 16%;margin-top: 6px;float: right;display: inline-block;text-align: center;margin-right: 1px;"></span>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 52%;position: relative;min-height: 1px;float: left;padding-top: 4px;">
                                    <span style="float: right;display: inline-block;">شماره ثبت</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 15%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;margin: 0 3px 0 0;">شغل</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 19%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;padding-top: 1px;">وضعیت تاهل</span>
                                    <span style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                    <span style="float: right;display: inline-block;margin-right: -1px;">مجرد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 1px;">متاهل</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                </div>
                                <div
                                    style="width: 48%;position: relative;min-height: 1px;float: left;text-align: right;margin-top: 5px;">
                                    <div style="float: right;display: inline-block;"> شماره ملی<span>(حقیقی)</span>
                                    </div>
                                    <span style="float: right;display: inline-block;margin: 0 1px;">/</span>

                                    <div style="float: right;display: inline-block;"> کد اقتصادی
                                        <span>(حقوقی)</span>
                                    </div>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <div style="display: inline-block;border-bottom-color: transparent;float: right;">
                                        <div>
                                            <table
                                                style="padding: 0;display: inline-block;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                <tbody style="border-top: 1px solid #000000;">
                                                    <tr>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-right: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 15px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 15px;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 15%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">شماره پرسنلی</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-right: 5px;border-bottom: dotted 2px #184727;width: 37%;min-width: 31%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 22%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">نسبت با بیمه شده</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 35%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                </div>
                                <div style="width: 25%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">تلفن همراه</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 64%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                </div>
                                <div style="width: 21%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">کد شهرستان</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 53%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                                <div style="width: 17%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تلفن ثابت</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 50%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 20%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">کدپستی</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-right: 5px;border-bottom: dotted 2px #184727;width: 68%;min-width: 31%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 9%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">پلاک</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 35%;float: right;display: inline-block;margin: 6px 5px 0 0;text-align: center;"></span>
                                </div>
                                <div style="width: 15%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">کوچه</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 65%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                </div>
                                <div style="width: 24%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">خیابان</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 71%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                                <div style="width: 32%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">نشانی دقیق محل کار</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span style="float: right;display: inline-block;">شهر</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 47%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 31%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">ایمیل</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-left: 3px;border-bottom: dotted 2px #184727;width: 26%; float: right;display: inline-block;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;text-align: center;">@</span>
                                    <span
                                        style="margin-top: 6px;margin-right: 2px;border-bottom: dotted 2px #184727;width: 54%; float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 7%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">پلاک</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 35%;float: right;display: inline-block;margin: 6px 5px 0 0;text-align: center;"></span>
                                </div>
                                <div style="width: 10%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">کوچه</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 56%;float: right;display: inline-block;margin: 6px 0 0 2px;text-align: center;"></span>
                                </div>
                                <div style="width: 20%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;margin-right: 3px;">خیابان</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 71%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                                <div style="width: 32%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">نشانی دقیق محل سکونت</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span style="float: right;display: inline-block;">شهر</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 39%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;"></span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;margin-top: 5px;font-size: 10px;">
                        <div
                            style="margin-right: 30px;padding: 0 5px 10px 3px;color: #000000;border: 1px solid #000000;display: block;">
                            <span
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;">مشخصات
                                بیمه شده</span>
                            <div style="clear: both;display: table;width: 100%;">
                                <div style="width: 60%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="float: left;display: block;border: 1px solid #0a083b;margin-top: -1px;border-top-width: 2px;">
                                        <div>
                                            <table
                                                style="padding: 0;display: table;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                <tbody>
                                                    <tr>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;border-left: 1px solid #0a083b;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #000000;">
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;border-left: 1px solid #0a083b;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                        <td
                                                            style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="width: 40%;position: relative;min-height: 1px;float: left;text-align: right;margin-top: 5px;">
                                    <span style="float: right;display: inline-block;">نام خانوادگی</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 78%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;"></span>
                                    <div style="margin-top: 25px;display: table;width: 100%;">
                                        <span style="float: right;display: inline-block;">نام</span>
                                        <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                        <span
                                            style="border-bottom: dotted 2px #184727;width: 92%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;"></span>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 50%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;margin-right: 77px;">تابعیت</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-right: 5px;border-bottom: dotted 2px #184727;width: 37%;min-width: 31%;float: right;display: inline-block;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;">جنسیت</span>
                                    <span style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                    <span style="float: right;display: inline-block;">زن</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 5px;">مرد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                </div>
                                <div style="width: 50%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تاریخ تولد</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 2px 0 1px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="margin-top: 6px;border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;text-align: center;margin-right: 1px;margin-left: 1px;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="margin-top: 6px;border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;text-align: center;margin-right: 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 6px;">شماره
                                        شناسنامه</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 25%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;"></span>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 70%;position: relative;min-height: 1px;float: left;padding-top: 4px;">
                                    <span style="float: right;display: inline-block;">نام پدر</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 12%;float: right;display: inline-block;margin: 6px 1px 0 6px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 0;">محل تولد</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 18%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;margin: 0 3px 0 0;">شغل</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;margin: 6px 2px 0 1px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;padding-top: 1px;">وضعیت تاهل</span>
                                    <span style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                    <span style="float: right;display: inline-block;margin-right: -1px;">مجرد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 1px;">متاهل</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                </div>
                                <div
                                    style="width: 30%;position: relative;min-height: 1px;float: left;text-align: right;margin-top: 5px;">
                                    <div style="float: right;display: inline-block;">شماره ملی</div>

                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <div style="display: inline-block;border-bottom-color: transparent;float: right;">
                                        <div>
                                            <table
                                                style="padding: 0;display: inline-block;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                <tbody style="border-top: 1px solid #000000;">
                                                    <tr>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-right: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 15px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 18px;">
                                                        </td>
                                                        <td
                                                            style="width: 15px;height: 15px;border-left: 1px solid #0a083b;border-bottom: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 15px;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 15%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">شماره پرسنلی</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-right: 5px;border-bottom: dotted 2px #184727;width: 37%;min-width: 31%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 33%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">تلفن همراه</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 73%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                </div>
                                <div style="width: 21%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">کد شهرستان</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 53%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                                <div style="width: 31%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تلفن ثابت</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 73%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 20%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">کدپستی</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-right: 5px;border-bottom: dotted 2px #184727;width: 68%;min-width: 31%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 9%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">پلاک</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 35%;float: right;display: inline-block;margin: 6px 5px 0 0;text-align: center;"></span>
                                </div>
                                <div style="width: 15%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">کوچه</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 65%;float: right;display: inline-block;margin: 6px 5px 0 4px;text-align: center;"></span>
                                </div>
                                <div style="width: 24%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">خیابان</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 71%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                                <div style="width: 32%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">نشانی دقیق محل کار</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span style="float: right;display: inline-block;">شهر</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 47%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 31%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">ایمیل</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-left: 3px;border-bottom: dotted 2px #184727;width: 26%; float: right;display: inline-block;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;text-align: center;">@</span>
                                    <span
                                        style="margin-top: 6px;margin-right: 2px;border-bottom: dotted 2px #184727;width: 54%; float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 7%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">پلاک</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 35%;float: right;display: inline-block;margin: 6px 5px 0 0;text-align: center;"></span>
                                </div>
                                <div style="width: 10%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">کوچه</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 56%;float: right;display: inline-block;margin: 6px 0 0 2px;text-align: center;"></span>
                                </div>
                                <div style="width: 20%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;margin-right: 3px;">خیابان</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 71%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;min-width: 37%;"></span>
                                </div>
                                <div style="width: 32%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">نشانی دقیق محل سکونت</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span style="float: right;display: inline-block;">شهر</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 39%;float: right;display: inline-block;margin-top: 6px;margin-right: 1px;text-align: center;"></span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;margin-top: 5px;font-size: 10px;">
                        <span
                            style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;">
                            مشخصات بیمه نامه مورد در خواست
                        </span>
                        <div style="margin-right: 30px;padding: 0 5px 3px 0;color: #000000;display: block;">
                            <div style="clear: both;display: table;width: 100%;">
                                <div style="width: 100%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: block;min-height: 24px;padding: 6px 5px 5px 5px;border: 1px solid #000000;">
                                        <span style="float: right;display: inline-block;">1</span>
                                        <span
                                            style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">روش پرداخت حق بیمه</span>
                                        <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                        <span style="float: right;display: inline-block;margin-right: 5px;">یکجا</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 18px;">سالانه</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 14px;">دو قسط شش
                                            ماهه</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 18px;">چهار قسط سه
                                            ماهه</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 10px;">شش قسط دو
                                            ماهه</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 11px;"> دوازده قسط
                                            ماهانه</span>
                                        <span style="float: right;display: inline-block;margin-right: 5px;">(گروهی)</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="margin-right: 30px;padding: 0 5px 1px 0;color: #000000;display: block;margin-left: 3px;">
                            <div style="clear: both;display: table;width: 100%;">
                                <div style="width: 31.333333%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-right: 3px;">
                                        <div style="display: table;text-align: center;margin: 5px 0;">
                                            <span style="display: inline-block;float: right;margin-right: 12px;">4</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                            </span>
                                            <div style="display: inline-block;float: right;">
                                                میزان افزایش سالانه حق بیمه
                                                در سنوات آتی
                                            </div>
                                            <span style="display: inline-block;float: right;">: </span>
                                        </div>
                                        <div style="margin-top: 5px;display: table;width: 100%;margin-bottom: 6px;">
                                            <span
                                                style="float: right;display: inline-block;margin-right: 10px;">ثابت</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span style="float: right;display: inline-block;margin-right: 5px;">5%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                   width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 5px;">10%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                        width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 5px;">15%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                       width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 5px;
                                     ">20%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 39.333333%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-right: 2px;padding-top: 13px;">
                                        <span
                                            style="display: inline-block;float: right;margin-right: 20px;padding: 15px 0;">3</span>
                                        <span
                                            style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;margin-left: 3px;padding: 11px 0;">
                                        </span>
                                        <div style="display: inline-block;float: right;padding: 15px 0;">
                                            حق بیمه سالانه
                                        </div>
                                        <span style="display: inline-block;float: right;padding: 15px 0;">: </span>
                                        <span class="ckecked-wide checked"
                                            style="position: relative;float: right;
                                  display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;
                                  border-bottom-color: #f1efe2;width: 85px;height: 23px;margin: 10px 6px 10px 0;
                                  text-align: center;line-height: 23px;"></span>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 10px;padding: 15px 0;">ریال</span>
                                    </div>
                                </div>
                                <div style="width: 29.333333%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;padding-top: 13px;">
                                        <span
                                            style="display: inline-block;float: right;margin-right: 2px;padding: 15px 0;">2</span>
                                        <span
                                            style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;margin-left: 3px;padding: 11px 0;">
                                        </span>
                                        <div style="display: inline-block;float: right;padding: 15px 0;">
                                            حق بیمه قسط اول
                                        </div>
                                        <span style="display: inline-block;float: right;padding: 15px 0;">: </span>
                                        <span class="ckecked-wide checked"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;width: 85px;
                                  height: 23px;margin: 10px 2px 10px 0;text-align: center;line-height: 23px;
                                  "></span>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 5px;padding: 15px 0;">ریال</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="margin-right: 30px;padding: 0 5px 2px 0;color: #000000;display: block;margin-left: 3px;">
                            <div style="clear: both;display: table;width: 100%;margin-left: 24px;">
                                <div style="width: 31.333333%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-right: 3px;margin-top: 2px;">
                                        <div style="display: table;text-align: center;margin: 5px 0;">
                                            <span style="display: inline-block;float: right;margin-right: 5px;">7</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                            </span>
                                            <div style="display: inline-block;float: right;">
                                                میزان افزایش سالانه سرمایه فوت
                                                در سنوات آتی
                                            </div>
                                            <span style="display: inline-block;float: right;">: </span>
                                        </div>
                                        <div style="margin-top: 5px;display: table;width: 100%;margin-bottom: 6px;">
                                            <span
                                                style="float: right;display: inline-block;margin-right: 10px;">ثابت</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span style="float: right;display: inline-block;margin-right: 10px;">5%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                   width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 10px;">10%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                     width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 5px;">15%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                        width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 5px;
                                     ">20%</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                   width: 12px;height: 12px;margin: 0 2px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 39.333333%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-right: 2px;padding-top: 13px;margin-top: 2px;">
                                        <span
                                            style="display: inline-block;float: right;margin-right: 2px;padding: 1px 0;">6</span>
                                        <span
                                            style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;margin: 0 2px;padding: 4px 0;">
                                        </span>
                                        <div style="display: inline-block;float: right;">
                                            سرمایه فوت بیمه شده
                                            <div>از یک تا 25 برابر حق بیمه سالانه</div>
                                            <div>از یک تا 5 برابر حق بیمه یکجا</div>
                                        </div>
                                        <span style="display: inline-block;float: right;padding: 15px 0;">: </span>
                                        <span class="ckecked-wide checked"
                                            style="position: relative;  float: right;
                                  display: inline-block;border: 2px solid #aca899; border-right-color: #f1efe2;
                                  border-bottom-color: #f1efe2;width: 85px;height: 23px;margin: 10px 6px 10px 0;
                                  text-align: center;line-height: 23px;"></span>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 10px;padding: 15px 0;">ریال</span>
                                    </div>
                                </div>
                                <div style="width: 29.333333%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;padding-top: 13px;margin-top: 2px;">
                                        <span
                                            style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">7</span>
                                        <span
                                            style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                        </span>
                                        <div style="display: inline-block;float: right;padding: 4px 0;">
                                            مدت بیمه نامه
                                            <div style="margin-top: 5px;">از 5 تا 30 سال</div>
                                        </div>
                                        <span style="display: inline-block;float: right;padding: 15px 0;">: </span>
                                        <span class="ckecked-wide checked"
                                            style="position: relative;  float: right;
                                  display: inline-block;border: 2px solid #aca899; border-right-color: #f1efe2;
                                  border-bottom-color: #f1efe2;width: 85px;height: 23px;margin: 10px 6px 10px 0;
                                  text-align: center;line-height: 23px;"></span>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 5px;padding: 15px 0;">سال</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-right: 30px;padding: 0 5px 2px 0;color: #000000;display: block;">
                            <div style="clear: both;display: table;width: 100%;margin-left: 24px;">
                                <div style="width: 100%;position: relative;min-height: 1px;float: left;">

                                </div>
                            </div>
                        </div>
                        <div
                            style="margin-right: 71px;padding: 0 5px 2px 0;color: #000000;display: block;margin-left: 3px;position: relative;">
                            <div
                                style="width: 40px;height: 98%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 20px;font-weight: bold;text-align: center;position: absolute;top: 2px;z-index: 2;right: -35px;transform: rotate(180deg);font-size: 11px;border: 1px solid #000000;">
                                <div>پوشش های تکمیلی</div>
                                <div>حوادث شخصی بیمه شده</div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;margin-left: 24px;">
                                <div style="width: 100%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-right: 3px;margin-top: 2px;">
                                        <div
                                            style="display: table;width: 100%;position: relative;min-height: 1px;text-align: right;margin-top: 3px;">
                                            <span
                                                style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">8</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                            </span>
                                            <div style="display: inline-block;float: right;padding: 4px 0;">
                                                فوت بیمه شده در اثر حادثه
                                            </div>
                                            <span style="margin: 3px 2px;float: right;display: inline-block;">: </span>
                                            <div
                                                style="float: left;display: inline-block;margin-left: 1px;margin-top: 4px;">
                                                <span style="float: right;display: inline-block;">ندارد</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 10px;">دارد</span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                                <span style="float: right;display: inline-block;margin-right: 10px;">(یک
                                                    برابر</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span style="float: right;display: inline-block;margin-right: 10px;"> دو
                                                    برابر</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span style="float: right;display: inline-block;margin-right: 10px;"> سه
                                                    برابر</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 3px;margin-left: 5px;">
                                                    سرمایه فوت
                                                    )</span>
                                            </div>
                                        </div>
                                        <div
                                            style="display: table;width: 100%;position: relative;min-height: 1px;text-align: right;margin-bottom: 5px;">
                                            <span
                                                style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">9</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                            </span>
                                            <div style="display: inline-block;float: right;padding: 4px 0;">
                                                نقص عضو و از کار افتادگی دائم
                                                <span>(کلی و جزئی)</span>
                                                بیمه شده در اثر حادثه
                                            </div>
                                            <span style="margin: 3px 2px;float: right;display: inline-block;">: </span>
                                            <div
                                                style="float: left;display: inline-block;margin-left: 1px;margin-top: 4px;">
                                                <span style="float: right;display: inline-block;">ندارد</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 10px;">دارد</span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 10px;">(100%</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 10px;">50%</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 3px;margin-left: 5px;">
                                                    سرمایه فوت
                                                    )</span>
                                            </div>
                                        </div>
                                        <div style="clear: both;display: table;width: 100%;margin-left: 24px;">
                                            <div style="width: 46%;position: relative;min-height: 1px;float: left;">
                                                <div style="display: inline-block;margin-left: 1px;margin-top: 4px;">
                                                    <span style="float: right;display: inline-block;">ندارد</span>
                                                    <span
                                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    <span
                                                        style="float: right;display: inline-block;margin-right: 4px;">دارد</span>
                                                    <span
                                                        style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                                    <div
                                                        style="float: right;display: inline-block;margin-right: 2px;margin-top: 2px;font-size: 8.5px;">
                                                        (
                                                        ارائه این پوشش منوط به اخذ پوشش ردیف های
                                                        <span style="font-weight: bold;">8</span>
                                                        یا
                                                        <span style="font-weight: bold;">9</span>
                                                        می باشد.
                                                        )
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="width: 54%;position: relative;min-height: 1px;float: left;font-size: 9px;">
                                                <span
                                                    style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;font-weight: bold;">10</span>
                                                <span
                                                    style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                                </span>
                                                <div style="display: inline-block;float: right;padding: 4px 0;">
                                                    هزینه پزشکی ناشی از حادثه معادل
                                                    <span>10%</span>
                                                    سرمایه فوت در اثر حادثه تا سقف 200 میلیون ریال
                                                </div>
                                                <span style="margin: 3px 2px;float: right;display: inline-block;">: </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display: table;width: 100%;position: relative;min-height: 1px;text-align: right;margin-bottom: 5px;">
                                            <div style=" padding: 5px 0 1px 0;font-size: 8.5px;">
                                                <span
                                                    style="padding-right: 5px;display: inline-block;float: right;font-weight: bold;">توجه</span>
                                                <span style="display: inline-block;float: right;margin: 0 2px;">: </span>
                                                <span style="display: inline-block;float: right;"> بیمه شده محترم</span>
                                                <span style="display: inline-block;float: right;">،</span>
                                                <div style="display: inline-block;float: right;">
                                                    نظر به اینکه خطرات ذیل در شرایط عمومی حوادث شخصی پوشش های تکمیلی
                                                    مندرج در ردیف های

                                                </div>
                                                <div style="display: inline-block;float: right;padding: 0 4px;">
                                                    9،8و10
                                                </div>
                                                <div style="display: inline-block;float: right;">
                                                    استثنا می باشند،در صورت تمایل و پرداخت حق بیمه
                                                </div>
                                                <div
                                                    style="display: inline-block;float: right;padding-right: 5px;padding-top: 5px;">
                                                    مربوطه،
                                                    این موارد نیز
                                                    تحت پوشش بیمه ای قرار گرفته و جز تعهدات بیمه گر محسوب خواهند شد
                                                </div>
                                                <span style="margin: 5px 2px;float: right;display: inline-block;">: </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 2px;margin-right: 4px;">
                                            <span
                                                style="float: right;display: inline-block;margin-left: 3px;margin-top: 4px;">زلزله</span>
                                            <span
                                                style="
                                            position: relative;
                                            float: right;
                                            display: inline-block;
                                            border: 2px solid #aca899;
                                            border-right-color: #f1efe2;
                                            border-bottom-color: #f1efe2;
                                            width: 12px;
                                            height: 12px;
                                            margin: 4px 2px 0 2px;
                                            "></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 15px;margin-top: 4px;">هدایت
                                                موتورسیکلت</span>
                                            <span
                                                style="
                                           position: relative;
                                           float: right;
                                           display: inline-block;
                                           border: 2px solid #aca899;
                                           border-right-color: #f1efe2;
                                           border-bottom-color: #f1efe2;
                                           width: 12px;
                                           height: 12px;
                                           margin: 4px 2px 0 2px;
                                           "></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 15px;margin-top: 4px;">ورزشهای
                                                حرفه ای</span>
                                            <span
                                                style="
                                           position: relative;
                                           float: right;
                                           display: inline-block;
                                           border: 2px solid #aca899;
                                           border-right-color: #f1efe2;
                                           border-bottom-color: #f1efe2;
                                           width: 12px;
                                           height: 12px;
                                           margin: 4px 2px 0 2px;
                                           "></span>
                                            <span style="float: right;margin-right: 13px;margin-top: 5px;">رشته
                                                ورزشی</span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 2px;margin-top: 5px;">: </span>
                                            <span
                                                style="margin-top: 11px;margin-right: 2px;border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;text-align: center;"></span>
                                            <span style="float: right;margin-right: 13px;margin-top: 4px;">و</span>
                                            <span style="float: right;margin-right: 13px;margin-top: 4px;">مدت
                                                تمرین</span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 2px;margin-top: 5px;">: </span>
                                            <span
                                                style="margin-right: 2px;margin-top: 10px;border-bottom: dotted 2px #184727;width: 15%;float: right;display: inline-block;text-align: center;"></span>
                                            <span style="float: right;margin-right: 5px;margin-top: 4px;">در هفته</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="margin-right: 30px;padding: 0 5px 2px 0;color: #000000;display: block;margin-left: 3px;">
                            <div style="clear: both;display: table;width: 100%;margin-left: 24px;">
                                <div style="width: 26%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-right: 3px;margin-top: 2px;">
                                        <div style="display: table;width: 100%;">
                                            <span
                                                style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">12</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                            </span>
                                            <div style="display: inline-block;float: right;padding: 4px 0;">
                                                پوشش تکمیلی بیماری های خاص
                                            </div>
                                            <span style="display: inline-block;float: right;padding: 4px 0;">
                                                : 
                                            </span>
                                        </div>
                                        <div
                                            style="display: table;width: 100%;margin-right: 7px;font-size: 8px;font-weight: bold;margin-bottom: 4px;">
                                            معادل 30% سرمایه فوت تا سقف 200 میلیون ریال
                                        </div>
                                        <div style="display: block;margin-right: 54px;">
                                            <span style="float: right;display: inline-block;">دارد</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                            <span
                                                style="float: right;display: inline-block;margin-right: 10px;">ندارد</span>
                                            <span
                                                style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                     width: 12px;height: 12px;margin: 0 2px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 74%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;padding-top: 13px;margin-top: 2px;">
                                        <div
                                            style="display: table;width: 100%;position: relative;min-height: 1px;text-align: right;margin-top: 3px;">
                                            <span
                                                style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">11</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                            </span>
                                            <div style="display: inline-block;float: right;padding: 4px 0;">
                                                پوشش تکمیلی معافیت از پرداخت حق بیمه در اثر از کار افتادگی کامل و دائم
                                                بیمه شده
                                            </div>
                                            <span style="margin: 3px 2px;float: right;display: inline-block;">: </span>
                                            <div
                                                style="float: left;display: inline-block;margin-left: 1px;margin-top: 4px;">
                                                <span style="float: right;display: inline-block;">دارد</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 10px;">ندارد</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                            </div>
                                        </div>
                                        <div
                                            style="display: table;width: 100%;position: relative;min-height: 1px;text-align: right;margin-bottom: 5px;">
                                            <span
                                                style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">12</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                            </span>
                                            <div style="display: inline-block;float: right;padding: 4px 0;">
                                                پوشش تکمیلی معافیت از پرداخت حق بیمه در اثر فوت یا از کار افتادگی در اثر
                                                حادثه بیمه گذار
                                                <span>(حامی)</span>
                                            </div>
                                            <span style="margin: 3px 2px;float: right;display: inline-block;">: </span>
                                            <div style="float: left;display: inline-block;margin-left: 0;margin-top: 4px;">
                                                <span style="float: right;display: inline-block;">دارد</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 10px;">ندارد</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div
                            style="margin-right: 30px;padding: 0 5px 2px 0;color: #000000;display: block;margin-left: 3px;">
                            <div style="clear: both;display: table;width: 100%;margin-left: 24px;">
                                <div style="width: 26%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-right: 3px;margin-top: 2px;">
                                        <div style="display: table;width: 100%;margin-bottom: 0px;margin-top: 3px;">
                                            <span
                                                style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">15</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                            </span>
                                            <div style="display: inline-block;float: right;padding: 4px 0;">
                                                واریز متفرقه
                                            </div>
                                            <span
                                                style="display: inline-block;float: right;margin-left: 1px;margin-top: 4px;margin-right: 1px;">
                                                (<i style="vertical-align: middle;" class="fa fa-star"></i>)
                                            </span>
                                            <span style="display: inline-block;float: right;padding: 4px 0;">
                                                : 
                                            </span>
                                            <span
                                                style="margin-top: 11px;margin-right: 2px;border-bottom: dotted 2px #184727;width: 38%;float: right;display: inline-block;text-align: center;"></span>
                                            <span
                                                style="display: inline-block;float: right;padding: 4px 0;margin-right: 1px;">
                                                ریال
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 74%;position: relative;min-height: 1px;float: left;">
                                    <div
                                        style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;padding-top: 13px;margin-top: 2px;">
                                        <div
                                            style="display: table;width: 100%;position: relative;min-height: 1px;text-align: right;margin-top: 3px;">
                                            <span
                                                style="display: inline-block;float: right;margin-right: 4px;padding: 3px 0;">14</span>
                                            <span
                                                style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding: 5px 0;margin: 0 2px;">
                                            </span>
                                            <div style="display: inline-block;float: right;padding: 4px 0;">
                                                حق بیمه پوششهای تکمیلی را جداگانه می پردازم
                                            </div>
                                            <span style="margin: 3px 2px;float: right;display: inline-block;">: </span>
                                            <div
                                                style="float: left;display: inline-block;margin-left: 1px;margin-top: 4px;">
                                                <span style="float: right;display: inline-block;">بله</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                <span
                                                    style="float: right;display: inline-block;margin-right: 10px;">خیر</span>
                                                <span
                                                    style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div style="margin-right: 30px;padding: 0 5px 1px 0;color: #000000;display: block;">
                            <div style="clear: both;display: table;width: 100%;margin-left: 24px;">
                                <span
                                    style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;">
                                    مشخصات بیمه نامه مورد در خواست
                                </span>
                                <div style="clear: both;display: block;width: 100%;margin-left: 24px;">
                                    <div style="width: 100%;position: relative;min-height: 1px;float: left;">
                                        <div
                                            style="display: table;width: 100%;min-height: 24px;border: 1px solid #000000;margin-top: 2px;color: red;">
                                            <div style=" padding: 5px 0 1px 0;font-size: 8.5px;font-weight: bold;">
                                                <span style="padding-right: 5px;">توجه</span>
                                                <span>: </span>
                                                "در صورت عدم پرداخت حق بیمه در سر رسید مقرر بمنظور برقراری پوشش های بیمه
                                                ای،هزینه پوشش فوت و سایر پوششهای تکمیلی انتخاب شده از محل اندوخته بیمه
                                                نامه کسر خواهد شد. "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 23px;padding-right: 25px;">
                    <td style="width: 100%;display: table;margin-top: 5px;font-size: 10px;">
                        <span
                            style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;">
                            مشخصات بیمه نامه مورد در خواست
                        </span>
                        <div style="margin-right: 30px;padding: 0 5px 3px 0;color: #000000;display: block;">
                            <div style="clear: both;display: table;width: 100%;">
                                <table class="table-border-custom"
                                    style="page-break-inside: avoid;width: 100%;
                                    display: block;position: relative;width: 100%;border-collapse: separate; border-spacing: 2px;">
                                    <tbody style="display: table;width: 100%;">
                                        <tr>
                                            <td colspan="2"
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span>نام و نام خانوادگی</span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span>شماره ملی</span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <table
                                                    style="page-break-inside: avoid;width: 100%;display: block;position: relative;width: 100%;">
                                                    <tbody style="display: table;width: 100%;">
                                                        <tr>
                                                            <td colspan="12">
                                                                <div>
                                                                    <span>تاریخ تولد</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;padding: 2px;">
                                                                <span style="display: inline-block;">روز/</span>
                                                            </td>
                                                            <td style="text-align: center;padding: 2px;">
                                                                <span style="display: inline-block;">ماه/</span>
                                                            </td>
                                                            <td style="text-align: center;padding: 2px;">
                                                                <span style="display: inline-block;">سال</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span>شماره شناسنامه</span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span>نام پدر</span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span>نسبت با بیمه شده</span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span>درصد سهم</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="text-align: center;font-size: 10px;border: 1px solid #000000;background-color: #0000ff;color: #ffffff;font-weight: normal;">
                                                <div>در صورت حیات</div>
                                                <div>بیمه شده</div>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;font-size: 11px;font-weight: bold;border: 1px solid #000000;min-width: 16%;width: 16%;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <div
                                                    style="display: table;border: 1px solid #0a083b;margin: -4px auto 0 auto;">
                                                    <div style="width: 172px;float: left;">
                                                        <table
                                                            style="padding: 0;display: block;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4"
                                                style="text-align: center;font-size: 10px;font-weight: normal;position: relative;">
                                                <div
                                                    style="border: 1px solid #000000;width: 25px;height: 150px;writing-mode: vertical-lr;  -webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;top: 0;z-index: 2;right: 0;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 10px;">
                                                    در صورت فوت بیمه شده
                                                </div>
                                                <h5
                                                    style="width: 30px;margin-top: 5px;line-height: 39px;height: 95%;text-align: center;position: absolute;top: 0;z-index: 2;right: 30px;font-size: 14px; font-weight: bold;">
                                                    <span
                                                        style="display: block;color: #184727;line-height: 34px;border: 1px solid #000000;margin-top: -4px;">1</span>
                                                    <span
                                                        style="display: block;color: #184727;line-height: 34px;margin-top: 3px;border: 1px solid #000000;">2</span>
                                                    <span
                                                        style="display: block;color: #184727;line-height: 34px;border: 1px solid #000000;margin-top: 2px;">3</span>
                                                    <span
                                                        style="display: block;color: #184727;line-height: 33px;border: 1px solid #000000;margin-top: 2px;">4</span>
                                                </h5>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;font-size: 11px;font-weight: bold;border: 1px solid #000000;min-width: 16%;width: 16%;padding: 0 9px;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <div
                                                    style="display: table;border: 1px solid #0a083b;margin: -4px auto 0 auto;">
                                                    <div style="width: 172px;float: left;">
                                                        <table
                                                            style="padding: 0;display: block;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="text-align: center;color: #184727;font-size: 11px;font-weight: bold;border: 1px solid #000000;min-width: 16%;width: 16%;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <div
                                                    style="display: table;border: 1px solid #0a083b;margin: -4px auto 0 auto;">
                                                    <div style="width: 172px;float: left;">
                                                        <table
                                                            style="padding: 0;display: block;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="text-align: center;color: #184727;font-size: 11px;font-weight: bold;border: 1px solid #000000;min-width: 16%;width: 16%;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <div
                                                    style="display: table;border: 1px solid #0a083b;margin: -4px auto 0 auto;">
                                                    <div style="width: 172px;float: left;">
                                                        <table
                                                            style="padding: 0;display: block;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="text-align: center;color: #184727;font-size: 11px;font-weight: bold;border: 1px solid #000000;min-width: 16%;width: 16%;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <div
                                                    style="display: table;border: 1px solid #0a083b;margin: -4px auto 0 auto;">
                                                    <div style="width: 172px;float: left;">
                                                        <table
                                                            style="padding: 0;display: block;margin-left: 0;overflow: hidden;max-height: 18px;font-size: 11px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;border-left: 1px solid #0a083b;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                    <td
                                                                        style="width: 17px;height: 18px;display: inline-block;float: right;text-align: center;line-height: 20px;">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                            <td
                                                style="text-align: center;color: #184727;padding: 2px;font-size: 11px;font-weight: bold;border: 1px solid #000000;">
                                                <span></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;margin-top: 5px;font-size: 10px;">
                        <div
                            style="margin-right: 34px;padding: 0 0 10px 5px;color: #000000;border: 1px solid #000000;display: block;">
                            <span
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;">
                                سوابق بیمه ای بیمه شده
                            </span>
                            <div
                                style="width: 18px;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;
                                    -ms-writing-mode: tb-rl;line-height: 15px;height: 36%;font-size: 10px;font-weight: normal;
                                    text-align: center;position: absolute;bottom: 0;z-index: 2;left: 5px;transform: rotate(180deg);border: 1px solid #000000;">
                                <span>کد</span>
                                <span>: </span>
                                <span>139402</span>
                            </div>
                            <div style="clear: both;display: table;width: 100%;">
                                <div
                                    style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                    <div style="margin-right: 2px;margin-left: 2px;">
                                        <span style="float: right;display: inline-block;">1</span>
                                        <span
                                            style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                        </span>
                                        <div style="float: right;display: inline-block;">
                                            آیا تا کنون
                                        </div>
                                        <div
                                            style="float: right;display: inline-block;font-weight: bold;margin-right: 3px;">
                                            بیمه عمر و بیمه حادثه انفرادی
                                        </div>
                                        <div
                                            style="float: right;display: inline-block;font-weight: bold;margin-right: 3px;">
                                            خریداری کرده اید؟
                                        </div>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 3px;margin-left: 3px;">خیر</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 3px;">بله</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 3px;">بله،در حال
                                            حاضر بیمه نامه معتبر دارم</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 3px;">بله،تمام شده
                                            است</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;">در صورت مثبت بودن پاسخ</span>
                                    </div>
                                </div>
                                <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                    <div
                                        style="width: 33%;position: relative;min-height: 1px;float: left;text-align: right;">
                                        <span style="float: right;display: inline-block;margin-top: 4px;">
                                            سرمایه پوشش حادثه
                                        </span>
                                        <span class="ckecked-wide checked check-set-width"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;
                                 border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 56px;height: 23px;margin: 0 1px 10px 0;
                                  text-align: center;line-height: 23px;
                                  "></span>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 5px;margin-top: 4px;">
                                            خود را ذکر نمایید.
                                        </span>
                                    </div>
                                    <div
                                        style="width: 22%;position: relative;min-height: 1px;float: left;text-align: right;">
                                        <span style="float: right;display: inline-block;margin-top: 4px;">
                                            سرمایه بیمه عمر
                                        </span>
                                        <span class="ckecked-wide checked check-set-width"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;
                                 border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 56px;height: 23px;margin: 0 1px 10px 0;
                                  text-align: center;line-height: 23px;
                                  "></span>
                                    </div>
                                    <div
                                        style="width: 22%;position: relative;min-height: 1px;float: left;text-align: right;">
                                        <span style="float: right;display: inline-block;margin-top: 4px;">شماره بیمه
                                            نامه</span>
                                        <span class="ckecked-wide checked check-set-width"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;
                                 border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 56px;height: 23px;margin: 0 1px 10px 0;
                                  text-align: center;line-height: 23px;
                                  "></span>
                                    </div>
                                    <div
                                        style="width: 23%;position: relative;min-height: 1px;float: left;text-align: right;">
                                        <span
                                            style="float: right;display: inline-block;margin-right: 8px;margin-top: 4px;">نام
                                            شرکت بیمه گر</span>
                                        <span class="ckecked-wide checked check-set-width"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;
                                 border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 56px;height: 23px;margin: 0 1px 10px 0;
                                  text-align: center;line-height: 23px;
                                  "></span>
                                    </div>
                                </div>
                                <div
                                    style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                    <div style="margin-right: 2px;margin-left: 2px;">
                                        <span style="float: right;display: inline-block;">1</span>
                                        <span
                                            style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                        </span>
                                        <div style="float: right;display: inline-block;">
                                            آیا تا کنون
                                        </div>
                                        <div
                                            style="float: right;display: inline-block;font-weight: bold;margin-right: 3px;">
                                            بیمه عمر و بیمه حادثه انفرادی
                                        </div>
                                        <div
                                            style="float: right;display: inline-block;font-weight: bold;margin-right: 3px;">
                                            در جریان صدور دارید؟
                                        </div>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 50px;margin-left: 3px;">بله</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: right;display: inline-block;margin-right: 50px;">خیر</span>
                                        <span
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                        <span style="float: left;display: inline-block;margin-left: 20px;">در صورت مثبت
                                            بودن پاسخ</span>
                                    </div>
                                </div>
                                <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                    <div
                                        style="width: 33%;position: relative;min-height: 1px;float: left;text-align: right;">
                                        <span style="float: right;display: inline-block;margin-top: 4px;">
                                            سرمایه پوشش حادثه
                                        </span>
                                        <span class="ckecked-wide checked check-set-width"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;
                                 border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 56px;height: 23px;margin: 0 1px 10px 0;
                                  text-align: center;line-height: 23px;
                                  "></span>
                                        <span
                                            style="float: right;display: inline-block;margin-right: 5px;margin-top: 4px;">
                                            خود را ذکر نمایید.
                                        </span>
                                    </div>
                                    <div
                                        style="width: 22%;position: relative;min-height: 1px;float: left;text-align: right;">
                                        <span style="float: right;display: inline-block;margin-top: 4px;"> سرمایه بیمه
                                            عمر</span>
                                        <span class="ckecked-wide checked check-set-width"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;
                                 border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 56px;height: 23px;margin: 0 1px 10px 0;
                                  text-align: center;line-height: 23px;
                                  "></span>
                                    </div>
                                    <div
                                        style="width: 23%;position: relative;min-height: 1px;float: left;text-align: right;">
                                        <span
                                            style="float: right;display: inline-block;margin-right: 8px;margin-top: 4px;">نام
                                            شرکت بیمه گر</span>
                                        <span class="ckecked-wide checked check-set-width"
                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;
                                 border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                  width: 56px;height: 23px;margin: 0 1px 10px 0;
                                  text-align: center;line-height: 23px;
                                  "></span>
                                    </div>
                                </div>
                                <div
                                    style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                    <div style="margin-right: 2px;margin-left: 2px;">
                                        <span style="float: right;display: inline-block;">1</span>
                                        <span
                                            style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                        </span>
                                        <div style="float: right;display: inline-block;">
                                            آیا تا کنون
                                        </div>
                                        <div
                                            style="float: right;display: inline-block;font-weight: bold;margin-right: 3px;">
                                            پیشنهاد بیمه عمر به شرکت بیمه ای داده اید؟
                                        </div>
                                        <div
                                            style="float: right;display: inline-block;font-weight: bold;margin-right: 3px;">
                                            که مورد موافقت قرار نگرفته باشد؟
                                        </div>
                                        <span style="float: right;display: inline-block;margin-right: 3px;">در صورت مثبت
                                            بودن علت آن را توضیح دهید.</span>
                                    </div>
                                </div>
                                <div
                                    style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                    <div style="margin-right: 2px;margin-left: 2px;">
                                        <span style="float: right;display: inline-block;">(تذکر</span>
                                        <span style="float: right;display: inline-block;">: </span>
                                        <div style="float: right;display: inline-block;">
                                            در صورت عدم اطلاع بیمه گر از وجود چنین بیمه نامه هایی بیمه گر میتواند از
                                            ایفای تمام یا بخشی از تعهدات خود خودداری نماید.
                                        </div>
                                        <span style="float: right;display: inline-block;">)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: table;position: relative;width: 100%;margin-top: 5px;">
                    <td style="width: 100%;display: table;font-size: 10px;">
                        <div style="display: block;color: #000000;">
                            <div style="line-height: 15px;padding-right: 34px;">
                                <span style="display: inline-block;float: right;margin-left: 2px;">
                                    (<i style="vertical-align: middle;" class="fa fa-star"></i>)
                                </span>
                                <div style="display: inline-block;float: right;">
                                    بیمه گذارانی که حق بیمه بیمه نامه را به روش سالانه می پردازند می تواند مبالغی را به
                                    عنوان واریز متفرقه
                                </div>
                                <div style="display: inline-block;float: right;">(حداقل<span
                                        style="margin: 0 5px;">5000000</span><span>ریال</span>)</div>
                                <div style="display: inline-block;float: right;">
                                    علاوه بر حق بیمه اصلی
                                </div>
                                <span style="display: inline-block;float: right;border-bottom: 1px solid #000000;">
                                    به حساب بیمه نامه خود
                                </span>
                                <div style="display: block;clear: both;">
                                    <span style="display: inline-block;float: right;border-bottom: 1px solid #000000;">
                                        واریز نماید
                                    </span>
                                    <div style="display: inline-block;float: right;">
                                        و این مبلغ و سود حاصله در طول مدت قرارداد مطابق شرایط عمومی و دستورالعمل اجرایی
                                        مربوطه قابل برداشت خواهد بود.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: 100%;display: table;" class="sdf">
                            <div style="line-height: 15px;padding-right: 34px;">
                                <span style="display: inline-block;float: right;font-weight: bold;">
                                    توجه
                                </span>
                                <span style="display: inline-block;float: right;margin: 0 2px;">: </span>
                                <div style="display: inline-block;float: right;">
                                    بیمه نامه هایی که حق بیمه آنها به صورت اقساطی پرداخت میش
                                    شود
                                </div>
                                <span style="display: inline-block;float: right;">،</span>
                                <span style="display: inline-block;float: right;">
                                    چنانچه ارزش باز خرید نداشته باشند تا شش ماه از تاریخ شروع قابل باز خرید نبوده و از
                                    ماه هفتم به بعد
                                </span>
                                <div style="display: block;clear: both;">
                                    <div style="display: inline-block;float: right;">
                                        شرط وصول اقساط طبق ضوابط
                                    </div>
                                    <span style="display: inline-block;float: right;">،</span>
                                    <div style="display: inline-block;float: right;">
                                        باز خرید بیمه نامه امکان پذیر خواهد بود.
                                    </div>
                                </div>


                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: table;position: relative;width: 100%;">
                    <td
                        style="display: block;color: #000000;font-size: 10px;font-weight: bold;padding: 10px 2px 5px 0;min-height: 25px;">
                        <p style="padding-right: 34px;">
                            <span>تهران</span>
                            <span>-</span>
                            <span>خیابان آیت الله طالقانی</span>
                            <span>-</span>
                            <span>بین خیابان ولیعصر</span>
                            <span>(عج)</span>
                            <span>وخیابان حافظ</span>
                            <span>پلاک</span>
                            <span>404</span>
                            <span>-</span>
                            <span>کد پستی</span>
                            <span>1591815954</span>
                            <span>-</span>
                            <span>تلفن</span>
                            <span>: </span>
                            <span>13</span>
                            <span>-</span>
                            <span>66409912</span>
                            <span>(021)</span>
                            <span>-</span>
                            <span>سامانه پیام رسان</span>
                            <span>30007242</span>
                        </p>
                        <div style="text-transform: uppercase;text-align: center;">www.bimehasia.com</div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="display: block;">
                        <div style="clear: both;display: block;margin-right: 34px;">
                            <div style="width: 10%;float: left;position: relative;min-height: 1px;">
                                <img src="{{ public_path('pdf-export-assets/images/logo-left.png') }}"
                                    style="max-height: 35px;float: left;margin-left: 20px;margin-top: 30px;" alt="">
                            </div>
                            <div style="width: 80%;float: left;min-height: 1px;position: relative;">
                                <div
                                    style="text-align: center;font-size: 11px;font-weight: bold;display: block;margin: 55px auto 0 auto;line-height: 28px;color: red;">
                                    <span style="display: inline-block;">توجه</span>
                                    لازم است سوالات ذیل که در خصوص سوابق پزشکی
                                    <span style="font-size: 13px;border-bottom: 1.5px solid red;">"بیمه شده"</span>
                                    می باشد،توسط ایشان یا بیمه گذار پاسخ داده شود: 
                                </div>
                                <div
                                    style="text-align: center;font-size: 11px;font-weight: bold;display: block;margin: 0 auto 0 auto;line-height: 28px;color: red;">
                                    در صورت اظهار خلاف واقع،مطابق شرایط عمومی مشمول کتمان حقایق تلقی خواهد شد.
                                </div>
                            </div>
                            <div style="width: 10%;padding-left: 15px;float: left;min-height: 1px;position: relative;">
                                <img src="{{ public_path('pdf-export-assets/images/apple.png') }}"
                                    style="max-height: 35px;float: right;margin-right: -12px;margin-top: 29px;" alt="">
                            </div>
                        </div>
                    </td>
                    <td style="width: 100%;display: table;margin-top: 5px;font-size: 10px;">
                        <div style="padding: 0 5px 0 1px;color: #000000;display: block;">
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">1</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="display: inline-block;float: right;">
                                        آیا سابقه ابتلا به بیماری های ذیل را داشته اید؟
                                    </div>
                                    <div style="display: inline-block;float: right;margin-right: 5px;">
                                        با قید علامت مشخص فرمائید
                                    </div>
                                    <span style="display: inline-block;float: right;">: </span>
                                </div>
                                <table style="page-break-inside: avoid;width: 100%;display: block;position: relative;width: 100%;">
                                    <tbody style="display: table;width: 100%;border: 1px solid #000000;">
                                        <tr style="border-bottom: 1px solid #000000;">
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">قلب و عروق</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">داخلی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">سکته مغزی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">هپاتیت</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                               width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">پوست</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                           width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border-bottom: 1px solid #000000;">
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">دستگاه تنفسی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                                width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">غدد داخلی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">تشنج</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">سل</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                           width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">روحی و
                                                        روانی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border-bottom: 1px solid #000000;">
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">فشار خون</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">کلیه و مجاری
                                                        ادرار</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                               width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">صرع</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">بیماری
                                                        عفونی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">استخوان و
                                                        مفاصل</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border-bottom: 1px solid #000000;">
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">بیماری قند</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">سرطان</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                               width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">مغز و اعصاب</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">چشم</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">بیماری خونی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                               width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">نوع بیماری
                                                        قند</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">دستگاه
                                                        گوارش</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">بیماریهای
                                                        واگیردار</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">گوش و حلق و
                                                        بینی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                style="padding: 5px 2px;border-left: 1px solid #000000;border-bottom-color: transparent;font-size: 9px;">
                                                <div
                                                    style="width: 100%;position: relative;min-height: 1px;text-align: right;">
                                                    <span style="float: right;display: inline-block;">اختلال
                                                        حرکتی</span>
                                                    <span
                                                        style="margin: 0 2px;float: right;display: inline-block;">: </span>
                                                    <div style="float: left;display: inline-block;">
                                                        <span style="float: right;display: inline-block;">بله</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                              width: 12px;height: 12px;margin: 0 2px;"></span>
                                                        <span style="float: right;display: inline-block;">خیر</span>
                                                        <span
                                                            style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                                             width: 12px;height: 12px;margin: 0 2px;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">2</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    در صورت ابتلا به هریک از بیماری های فوق و یا هر نوع بیماری دیگر،نام وتاریخ ابتلا به
                                    بیماری و نام پزشک معالج خود را اعلام فرمایید،سوابق بیماری و مدارک پزشکی ضمیمه شود.
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">3</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا از بین افراد خانواده شما
                                    </div>
                                    <div style="float: right;display: inline-block;">
                                        <span style="float: right;display: inline-block;">(</span>
                                        <span style="float: right;display: inline-block;">پدر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">مادر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">خواهر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">برادر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">همسر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">فرزندان</span>
                                        <span style="float: right;display: inline-block;">)</span>
                                    </div>
                                    <div style="display: inline-block;float: right;margin: 0 5px 0 0;">
                                        کسی سابقه بیماری های فوق الذکر را داشته اند؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 17px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    در صورت مثبت بودن پاسخ،نوع بیماری،نسبت فرد بیمارو سن وی را ذکر نمایید
                                    <span>: </span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">4</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا نقص عضوی دارید؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <div style="float: right;display: inline-block;margin-right: 4px;">
                                        چنانچه دارای نقص عضو می باشید با ذکر علت و درصد عنوان نمائید: 
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">5</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا تا به حال در بیمارستان و مراکز درمانی بستری شده اید؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">6</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا تابحال تحت عمل جراحی قرار گرفته اید؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <div style="float: right;display: inline-block;margin-right: 4px;">
                                        نوع عمل جراحی و نتیجه آن را ذکر فرمایید.شرح عمل و گزارش پاتولوژی ضمیمه شود.
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">7</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا در 6 ماه گذشته کاهش یا افزایش وزن داشته اید؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <div style="float: right;display: inline-block;margin-right: 4px;">
                                        در صورت مثبت بودن پاسخ،میزان و علت آن را ذکر فرمائید: 
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">8</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا دارویی را به طور مستمر استفاده می نمایید؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <div style="float: right;display: inline-block;margin-right: 4px;">
                                        لطفا نام دارو و میزان مصرف در 24 ساعت را اعلام فرمائید: 
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">9</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا از بین افراد خانواده شما
                                    </div>
                                    <div style="float: right;display: inline-block;">
                                        <span style="float: right;display: inline-block;">(</span>
                                        <span style="float: right;display: inline-block;">پدر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">مادر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">خواهر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">برادر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">همسر</span>
                                        <span
                                            style="border-bottom: solid 1px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 2px;">
                                        </span>
                                        <span style="float: right;display: inline-block;">فرزندان</span>
                                        <span style="float: right;display: inline-block;">)</span>
                                    </div>
                                    <div style="display: inline-block;float: right;margin: 0 5px 0 0;">
                                        در سن کمتر از 65 سالگی بعلت بیماری فوت شده اند؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 4px;">علت فوت؟</span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">10</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        آیا از
                                    </div>
                                    <div style="float: right;display: inline-block;">
                                        <span style="float: right;display: inline-block;">سیگار</span>
                                        <span
                                            style="display: inline-block;width: 4px;float: right;margin: 0 2px;">/</span>
                                        <span style="float: right;display: inline-block;">پیپ</span>
                                        <span
                                            style="display: inline-block;width: 4px;float: right;margin: 0 2px;">/</span>
                                        <span style="float: right;display: inline-block;">قلیان</span>
                                        <span style="float: right;display: inline-block;margin-right: 3px;">استفاده کرده
                                            یا می کنید؟</span>
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 4px;">میزان و مدت مصرف
                                        آن</span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">11</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        (در صورتی که بیمه شونده آقا باشد)
                                    </div>
                                    <div style="display: inline-block;float: right;margin: 0 5px 0 0;">
                                        آیا از <span style="font-weight: bold;">معافیت پزشکی</span> در خدمت نظام وظیفه
                                        استفاده کرده اید؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <div style="float: right;display: inline-block;margin-right: 4px;">
                                        علت آن را توضیح دهید؟
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 8px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;margin-top: 4px;">12</span>
                                    <span
                                        style="border-bottom: solid 2px #000000;display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;margin-top: 4px;">
                                    </span>
                                    <span style="float: right;display: inline-block;margin-top: 4px;">
                                        قد بیمه شده
                                    </span>
                                    <span class="ckecked-wide checked"
                                        style="position: relative;  float: right;
                                  display: inline-block;border: 2px solid #aca899; border-right-color: #f1efe2;
                                  border-bottom-color: #f1efe2;width: 85px;height: 23px;margin: 0 6px 10px 0;
                                  text-align: center;line-height: 23px;"></span>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-top: 4px;">وزن
                                        بیمه شده</span>
                                    <span class="ckecked-wide checked"
                                        style="position: relative;  float: right;
                                  display: inline-block;border: 2px solid #aca899; border-right-color: #f1efe2;
                                  border-bottom-color: #f1efe2;width: 85px;height: 23px;margin: 0 6px 10px 0;
                                  text-align: center;line-height: 23px;"></span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 4px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">13</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="display: inline-block;float: right;">
                                        نام بیمه های درمانی که تحت پوشش آن هستید را اعلام فرمائید
                                    </div>
                                    <span style="display: inline-block;float: right;">: </span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">14</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        (در صورتی که بیمه شده خانم باشد)
                                    </div>
                                    <div style="display: inline-block;float: right;margin: 0 5px 0 0;">
                                        آیا باردار هستید؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <div style="float: right;display: inline-block;margin-right: 4px;">
                                        (در صورت مثبت بودن،ضمن ذکر ماه بارداری،از مرکز مجوز اخذ شود.)
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-top: 12px;margin-right: 1px;font-weight: bold;font-size: 11px;line-height: 20px;border-bottom: 3px solid #000000;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <div style="float: right;display: inline-block;">
                                        <span style="float: right;display: inline-block;">
                                            توجه
                                        </span>
                                        <span style="display: inline-block;float: right;margin: 0 2px 0 2px;">
                                            : 
                                        </span>
                                        مشتری گرامی در صورت پذیرش در خواست شما و تخصیص کد رهگیری
                                        <span>(شناسه)</span>
                                        بانکی و واریز اولین قسط بیمه بحساب بیمه آسیا،از ساعت 24 روز واریز،بیمه نامه شما
                                        با استناد به فیش نقدی واریزی معتبر بوده و شما به خانواده بزرگ بیمه گذاران عمر
                                        بیمه آسیا خواهید پیوست.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;margin-top: 1px;font-size: 10px;">
                        <div
                            style="margin-right: 30px;padding: 0 5px 10px 5px;color: #000000;border: 2px solid #000000;display: block;border-top-width: 1px;">
                            <span
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;border: 2px solid #000000;">
                                تائید اظهارات</span>
                            <div style="clear: both;display: table;width: 100%;text-align: center;">
                                <div
                                    style="text-align: center;font-size: 9px;font-weight: bold;display: block;margin: 0 auto 0 auto;padding-top: 5px;line-height: 17px;color: red;">
                                    <div style="display: inline-block;border-bottom: 1px solid red;">
                                        اخذ امضای شخص بیمه شده الزامی است در غیر این صورت طبق ماده 23 قانون بیمه،بیمه
                                        نامه باطل می باشد.
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;">
                                <div
                                    style="font-size: 11px;margin-bottom: 0;clear: both;display: block;padding: 10px 5px 0 0;color: #000000;line-height: 21px;">
                                    <div style="display: inline-block;float: right;">
                                        اینجانبان به عنوان بیمه گذار و بیمه شده
                                    </div>
                                    <div
                                        style="font-weight: bold;display: inline-block;float: right;margin: 0 4px;border-bottom: 1px solid #000000;">
                                        کلیه مفاد و شرایط عمومی بیمه نامه را مطالعه نموده
                                    </div>
                                    <div style="display: inline-block;float: right;">
                                        به کلیه سوالات با صداقت پاسخ داده و اطلاع داریم که
                                    </div>
                                    <div
                                        style="font-weight: bold;display: inline-block;float: right;border-bottom: 1px solid #000000;">
                                        هرگونه اظهار خلاف واقع به موجب قانون باعث ابطال قرارداد و سلب مزایای بیمه نامه
                                        می شود
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 4px;">
                                        و ضمن
                                    </span>
                                    <div
                                        style="font-weight: bold;display: inline-block;float: right;border-bottom: 1px solid #000000;">
                                        اطلاع کامل از حدود تعهدات خود و بیمه گر
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 4px;">
                                        و نیز
                                    </span>
                                    <div style="display: block;width: 100%;clear: both;">
                                        <div
                                            style="font-weight: bold;display: inline-block;float: right;border-bottom: 1px solid #000000;">
                                            ارزش باز خرید بیمه نامه
                                        </div>
                                        <span style="display: inline-block;float: right;margin: 0 4px;">
                                            ،
                                        </span>
                                        <div style="display: inline-block;float: right;">
                                            تقاضای صدور آن را داریم.
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 19%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تاریخ و امضا</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 2px 0 1px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;text-align: center;margin-top: 6px;">

                                    </span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;text-align: center;margin-top: 6px;"></span>
                                </div>
                                <div style="width: 31%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">2</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <span style="float: right;">نام بیمه شده</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-top: 6px;margin-right: 2px;border-bottom: dotted 2px #184727;width: 65%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 20%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تاریخ و امضا</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 0 2px 0 5px;text-align: center;margin: 6px 2px;">
                                    </span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;text-align: center;margin: 6px 2px;">
                                    </span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;text-align: center;margin: 6px 2px;"></span>
                                </div>
                                <div style="width: 30%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;display: inline-block;">1</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <span style="float: right;">نام بیمه گذار</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-right: 2px;border-bottom: dotted 2px #184727;width: 65%;float: right;display: inline-block;text-align: center;margin-top: 6px;"></span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;font-size: 10px;">
                        <div
                            style="margin-right: 30px;padding: 0 5px 10px 5px;color: #000000;border: 2px solid #000000;display: block;">
                            <div
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;border: 2px solid #000000;">
                                <span>بازاریاب</span>
                                <span>/</span>
                                <span>نماینده</span>
                            </div>
                            <div style="clear: both;display: table;width: 100%;">
                                <div
                                    style="font-size: 11px;margin-bottom: 0;clear: both;display: block;padding: 10px 5px 0 0;color: #000000;line-height: 21px;">
                                    <div style="display: inline-block;float: right;">
                                        اینجانب شخصا بیمه گذار و نیز بیمه شده را ملاقات نموده ضمن
                                    </div>
                                    <div
                                        style="font-weight: bold;display: inline-block;float: right;margin: 0 4px;border-bottom: 1px solid #000000;">
                                        احراز هویت
                                    </div>
                                    <div style="display: inline-block;float: right;">
                                        ایشان و ارائه اطلاعات کافی درباره شرایط بیمه نامه و تعهدات و ارزش باز خرید
                                    </div>
                                    <div style="display: inline-block;float: right;">
                                        آن،
                                        صحت اظهارات ارائه شده،امضا و سلامتی بیمه شده و بیمه گذار را تایید می
                                        نمایم.همچنین مسئولیت رعایت ضوابط و دستورالعمل ها متوجه این نمایندگی می باشد.
                                        <div style="display: inline-block;">
                                            رو نوشت شناسنامه و کارت ملی بیمه گذار،بیمه شده و استفاده کننده به پیوست می
                                            باشد.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 27%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تاریخ ، مهر و امضا نماینده </span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 2px 0 0px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;text-align: center;margin-top: 6px;margin-right: 1px;margin-left: 1px;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;text-align: center;margin-top: 6px;margin-right: 1px;"></span>
                                </div>
                                <div style="width: 20%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">کد نمایندگی</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-right: 2px;margin-top: 6px;border-bottom: dotted 2px #184727;width: 47%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 25%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;margin-right: 13px;">نام نمایندگی </span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-right: 2px;margin-top: 6px;border-bottom: dotted 2px #184727;width: 46%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                                <div style="width: 28%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;">تاریخ ، نام و امضا بازار یاب
                                    </span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 2px 0 1px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 9%;float: right;display: inline-block;text-align: center;margin: 6px 2px 0 1px;">

                                    </span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 9%;float: right;display: inline-block;text-align: center;margin: 6px 2px 0 5px;"></span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;font-size: 10px;">
                        <div
                            style="margin-right: 30px;padding: 0 5px 10px 5px;color: #000000;border: 2px solid #000000;display: block;">
                            <div
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;border: 2px solid #000000;">
                                <span>واحد صدور</span>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <div style="float: right;display: inline-block;">
                                        با توجه به اطلاعات ذکر شده در این پیشنهاد
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        ;
                                    </span>
                                    <div style="display: inline-block;float: right;">
                                        صدور بیمه نامه نیاز به آزمایش های پزشکی دارد؟
                                    </div>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <div style="float: right;display: inline-block;">
                                        علت در خواست آزمایش های پزشکی
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span
                                        style="float: right;display: inline-block;margin-right: 15px;margin-left: 3px;">سن
                                        بیمه شده و سرمایه بیمه نامه</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 15px;">مسائل
                                        پزشکی</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;margin-right: 13px;">سایر موراد</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-right: 2px;margin-top: 6px;border-bottom: dotted 2px #184727;width: 30%;float: right;display: inline-block;text-align: center;"></span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;font-size: 10px;">
                        <div
                            style="margin-right: 30px;padding: 0 5px 10px 5px;color: #000000;border: 2px solid #000000;display: block;">
                            <div
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;border: 2px solid #000000;">
                                <span>نظریه پزشک معتمد</span>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;font-weight: bold;">
                                    <div style="float: right;display: inline-block;">
                                        سوابق پزشکی بیمه شده بررسی گردید و پذیرش ایشان
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">1</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        نیاز به آزمایش تکمیلی دارد
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span style="float: right;display: inline-block;margin-left: 3px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 6px;">2</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        منع پزشکی دارد
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span style="float: right;display: inline-block;margin-left: 3px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 6px;">2</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        با اضافه نرخ پزشکی
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span class="ckecked-wide checked"
                                        style="position: relative;  float: right;
                                  display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;
                                  border-bottom-color: #f1efe2;width: 85px;height: 23px;margin: -4px 6px 10px 0;
                                  text-align: center;line-height: 23px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">بلامانع
                                        است.</span>
                                </div>
                            </div>
                            <div
                                style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;font-weight: bold;">
                                <div style="width: 20%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">امضا و مهر پزشک</span>
                                </div>
                                <div style="width: 22%;position: relative;min-height: 1px;float: left;text-align: right;">
                                    <span style="float: right;display: inline-block;margin-right: 16px;">تاریخ</span>
                                    <span style="float: right;display: inline-block;margin: 0 2px;">: </span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;margin: 6px 2px 0 5px;text-align: center;"></span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 8%;float: right;display: inline-block;text-align: center;margin: 6px 2px 0 5px;">

                                    </span>
                                    <span style="float: right;display: inline-block;">/</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 16%;float: right;display: inline-block;text-align: center;margin: 6px 2px 0 5px;"></span>
                                </div>
                                <div style="width: 23%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">نام پزشک معتمد</span>
                                    <span style="float: right;margin: 0 2px;">: </span>
                                    <span style="float: right;"></span>
                                </div>
                                <div
                                    style="width: 34%;position: relative;min-height: 1px;float: left;font-weight: normal;">
                                    <div style="float: right;border-bottom: 1px solid #000000;">
                                        (درج علت و توضیح توسط پزشک معتمد الزامی است)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: block;position: relative;width: 100%;padding-left: 25px;padding-right: 25px;">
                    <td style="width: 100%;display: table;font-size: 10px;">
                        <div
                            style="margin-right: 30px;padding: 0 5px 10px 5px;color: #000000;border: 2px solid #000000;display: block;">
                            <div
                                style="width: 25px;height: 100%;writing-mode: vertical-lr;-webkit-writing-mode: vertical-lr;-ms-writing-mode: tb-rl;line-height: 25px;text-align: center;position: absolute;top: 0;z-index: 2;right: 31px;background-color: #0000ff;color: #ffffff;transform: rotate(180deg);font-size: 11px;border: 2px solid #000000;">
                                <span>نظریه مسئول صدور</span>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <span style="float: right;display: inline-block;">1</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">
                                        رونوشت شناسنامه
                                    </div>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        /
                                    </span>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        کارت ملی ضمیمه پیشنهاد می باشد
                                    </span>
                                    <span style="float: right;display: inline-block;margin-left: 3px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 6px;">2</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;margin-right: 6px;">
                                        با توجه به اطلاعات مندرج در سوابق بیمه ای بیمه شده
                                    </div>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">
                                        : 
                                    </span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 5px;">
                                    </span>
                                    <span style="float: right;display: inline-block;margin-right: 1px;">
                                        حق بیمه بیمه نامه
                                    </span>
                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <div style="float: right;display: inline-block;">
                                        قبلی به طور مرتب پرداخت شده ست؟
                                    </div>
                                    <span style="float: right;display: inline-block;margin-left: 3px;">بله</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">خیر</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;">2</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;margin-right: 6px;">
                                        سابقه خسارت
                                    </div>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">
                                        : 
                                    </span>
                                    <span style="float: right;display: inline-block;margin-left: 3px;">دارد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">ندارد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;">3</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">منع مقرراتی</div>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">
                                        : 
                                    </span>
                                    <span style="float: right;display: inline-block;margin-left: 3px;">دارد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">ندارد</span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;">4</span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin-left: 3px;">
                                    </span>
                                    <div style="float: right;display: inline-block;">با توجه به اطلاعات پرسشنامه،</div>

                                </div>
                            </div>
                            <div
                                style="display: table;width: 100%;position: relative;min-height: 1px;margin-bottom: 5px;margin-top: 12px;margin-right: 4px;">
                                <div style="margin-right: 2px;margin-left: 2px;">
                                    <div style="float: right;display: inline-block;"> با لحاظ
                                        <span style="font-weight: bold;">اضافه</span>
                                        <span>نرخ</span>
                                    </div>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 3px;">
                                    </span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">قد و وزن</span>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 3px;">
                                    </span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">سوابق
                                        خانوادگی</span>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span
                                        style="border-bottom: solid 2px #000000; display: inline-block;width: 4px;float: right;padding-top: 6px;margin: 0 3px;">
                                    </span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">پزشکی</span>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <span style="float: right;display: inline-block;margin-right: 3px;">با مجموع کل اضافه
                                        نرخ</span>
                                    <span style="display: inline-block;float: right;margin: 0 3px;">
                                        : 
                                    </span>
                                    <span
                                        style="position: relative;float: right;display: inline-block;border: 2px solid #aca899;border-right-color: #f1efe2;border-bottom-color: #f1efe2;
                            width: 12px;height: 12px;margin: 0 2px;"></span>
                                    <div style="float: right;display: inline-block;margin-right: 3px;">صدور بیمه نامه
                                        بلامانع است</div>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 100%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">توضیح</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                    <span
                                        style="margin-right: 5px;border-bottom: dotted 2px #184727;width: 94%;float: right;display: inline-block;text-align: right;margin-top: 6px;"></span>
                                </div>
                            </div>
                            <div style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;">
                                <div style="width: 50%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;font-weight: bold;">تاریخ</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                </div>
                                <div style="width: 50%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">کد واحد صدور</span>
                                    <span style="float: right;display: inline-block;margin-right: 2px;">: </span>
                                </div>
                            </div>
                            <div
                                style="clear: both;display: table;width: 100%;text-align: center;margin-top: 10px;font-weight: bold;font-size: 11px;">
                                <div style="width: 50%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">نام</span>
                                    <span
                                        style="margin: 7px  5px 0 5px;border-bottom: dotted 2px #184727;width: 40%;float: right;display: inline-block;text-align: center;"></span>
                                    <span style="float: right;"> امضاء مسئول صدور عمر و پس انداز</span>
                                </div>
                                <div style="width: 50%;position: relative;min-height: 1px;float: left;">
                                    <span style="float: right;">نام</span>
                                    <span
                                        style="border-bottom: dotted 2px #184727;width: 40%;float: right;display: inline-block;text-align: center;margin: 7px  5px 0 5px;"></span>
                                    <span style="float: right;">و امضاء رئیس شعبه</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="display: table;position: relative;width: 100%;">
                    <td
                        style="display: block;color: #000000;font-size: 10px;font-weight: bold;padding: 10px 2px 5px 0;min-height: 25px;">
                        <p style="padding-right: 34px;">
                            <span>تهران</span>
                            <span>-</span>
                            <span>خیابان آیت الله طالقانی</span>
                            <span>-</span>
                            <span>بین خیابان ولیعصر</span>
                            <span>(عج)</span>
                            <span>وخیابان حافظ</span>
                            <span>پلاک</span>
                            <span>404</span>
                            <span>-</span>
                            <span>کد پستی</span>
                            <span>1591815954</span>
                            <span>-</span>
                            <span>تلفن</span>
                            <span>: </span>
                            <span>13</span>
                            <span>-</span>
                            <span>66409912</span>
                            <span>(021)</span>
                            <span>-</span>
                            <span>سامانه پیام رسان</span>
                            <span>30007242</span>
                        </p>
                        <div style="text-transform: uppercase;text-align: center;">www.bimehasia.com</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>