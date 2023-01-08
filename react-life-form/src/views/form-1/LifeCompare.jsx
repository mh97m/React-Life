import { useState, useEffect, useRef } from "react";
import FormInput from "./FormInput";
import Cookies from "universal-cookie";
import DateObject from "react-date-object";
import persian from "react-date-object/calendars/persian";
import persian_fa from "react-date-object/locales/persian_fa";
import "./lifeCompare.css";
// import Jobs from "../../Jobs.json";

function LifeCompare() {
    const cookies = new Cookies();
    const formData = cookies.get("formData");
    const [values, setValues] = useState({
        insurance_target:
            typeof formData !== "undefined" ? formData["insurance_target"] : "",
        birth_year:
            typeof formData !== "undefined" ? formData["birth_year"] : "",
        birth_month:
            typeof formData !== "undefined" ? formData["birth_month"] : "",
        birth_day: typeof formData !== "undefined" ? formData["birth_day"] : "",
        life_ins_duration:
            typeof formData !== "undefined"
                ? formData["life_ins_duration"]
                : "",
        payment_method:
            typeof formData !== "undefined" ? formData["payment_method"] : "",
        annual_payment:
            typeof formData !== "undefined"
                ? parseInt(formData["annual_payment"]).toLocaleString()
                : "",
        first_job_level: typeof formData !== "undefined" ? formData["job"] : "",
        first_job_level_id: "",
        divided_payment:
            typeof formData !== "undefined"
                ? (
                      formData["annual_payment"] / formData["payment_method"]
                  ).toLocaleString()
                : "",
        annual_payment_increase: "",
        addon_payment_method: "",
        death_capital_any_reason_ratio: "",
        capital_increase: "",
        death_capital_incident_ratio: "",
        maim_ratio: "",
        has_medical_cost: "",
        additional_dangers: "",
        hospitalization: "",
        exemption: "",
        special_diseases_ratio: "",
    });
    const [errors, setErrors] = useState({
        insurance_target: "",
        birth_year: "",
        birth_month: "",
        birth_day: "",
        annual_payment: "",
    });
    const [disableds, setDisableds] = useState({
        maim_ratio: true,
        has_medical_cost: true,
        additional_dangers: true,
        hospitalization: true,
    });
    const [now, setNow] = useState(
        new DateObject({
            date: new Date(),
            calendar: persian,
            locale: persian_fa,
        })
    );
    const age = useRef(
        now.year -
            (values["birth_year"] ? values["birth_year"] : now.yaer) -
            (now.month >
            (values["birth_month"] ? values["birth_month"] : now.month)
                ? 1
                : 0) -
            (now.month ==
                (values["birth_month"] ? values["birth_month"] : now.month) &&
            now.day > (values["birth_day"] ? values["birth_day"] : now.day)
                ? 1
                : 0)
    );
    const [years, setYears] = useState([]);
    const [months, setMonths] = useState([]);
    const [days, setDays] = useState([]);
    const [durations, setDurations] = useState([]);
    const [jobs, setJobs] = useState([]);
    const [jobResults, setJobResults] = useState([]);
    const [capitalIncreases, setCapitalIncreases] = useState([]);
    const [capitalIncidents, setCapitalIncidents] = useState([]);

    useEffect(() => {
        setYears([...Array(66).keys()].map((i) => now.year - i));
        setMonths([...Array(12).keys()].map((i) => 12 - i));
        setDays([...Array(30).keys()].map((i) => 30 - i));
        updateDurations();
        updateCapitalIncidents();
        const getjobs = async () => {
            try {
                const result = await fetch(
                    "http://127.0.0.1:8000/api/v1/get-jobs"
                );
                // const result = await axios.get("http://127.0.0.1:8000/api/v1/get-jobs");
                const resultJobs = await result.json();
                setJobs(await resultJobs);
            } catch (error) {
                console.error("Can not connet to backend");
                setJobs([]);
            }
        };
        getjobs();
    }, []);

    const inputs = [
        {
            id: 1,
            type: "select",
            label: "نسبت",
            name: "insurance_target",
            errorMessage: ". نسبت خود را وارد کنید!!",
            required: true,
            options: ["خودم", "همسر", "فرزند", "پدر", "مادر", "خواهر", "برادر"],
        },
        {
            id: 2,
            type: "select",
            label: "سال تولد",
            name: "birth_year",
            errorMessage: ". سال تولد خود را وارد کنید !!",
            required: true,
            options: years,
        },
        {
            id: 3,
            type: "select",
            label: "ماه تولد",
            name: "birth_month",
            errorMessage: ". ماه تولد خود را وارد کنید !!",
            required: true,
            options: months,
        },
        {
            id: 4,
            type: "select",
            label: "روز تولد",
            name: "birth_day",
            errorMessage: ". روز تولد خود را وارد کنید !!",
            required: true,
            options: days,
        },
        {
            id: 5,
            type: "select",
            label: "مدت بیمه نامه",
            name: "life_ins_duration",
            errorMessage: ". مدت بیمه نامه را وارد کنید !!",
            required: true,
            options: durations,
        },
        {
            id: 6,
            type: "input",
            label: "عنوان شغل",
            name: "first_job_level",
            placeholder: "عنوان شغل",
            errorMessage: ". شغل خود را انتخاب کنید !!",
            required: true,
            options: jobResults,
        },
        {
            id: 7,
            type: "select",
            label: "روش پرداخت",
            name: "payment_method",
            errorMessage: ". ابتدا مبلغ پرداختی را انتخاب نمایید !!",
            required: true,
            options: [
                {
                    key: 1,
                    value: "۱ قسط سالانه",
                },
                {
                    key: 2,
                    value: "۲ قسط شش ماهه",
                },
                {
                    key: 4,
                    value: "۴ قسط سه ماهه",
                },
                {
                    key: 12,
                    value: "۱۲ قسط ماهانه",
                },
            ],
        },
        {
            id: 8,
            type: "input",
            label: "مبلغ پرداختی سال اول",
            name: "annual_payment",
            placeholder: "مبلغ پرداختی به ریال",
            errorMessage: ". مبلغ پرداختی برای سال اول را وارد کنید !!",
            required: true,
        },
        {
            id: 9,
            type: "input",
            label: "مبلغ پرداختی قسط اول",
            name: "divided_payment",
            readOnly: true,
        },
        {
            id: 10,
            type: "select",
            label: "افزایش سالانه حق بیمه",
            name: "annual_payment_increase",
            errorMessage: ". افزایش سالانه حق بیمه را انتخاب نمایید !!",
            required: true,
            options: [
                {
                    key: 0,
                    value: "0 %",
                },
                {
                    key: 10,
                    value: "10 %",
                },
                {
                    key: 15,
                    value: "15 %",
                },
                {
                    key: 20,
                    value: "20 %",
                },
                {
                    key: 25,
                    value: "25 %",
                },
            ],
        },
        {
            id: 11,
            type: "select",
            label: "نحوه پرداخت حق بیمه پوشش های اضافی",
            name: "addon_payment_method",
            defaultValue: "نحوه پرداخت",
            errorMessage:
                ". نحوه پرداخت حق بیمه پوشش های اضافی را انتخاب نمایید !!",
            required: true,
            options: [
                {
                    key: 0,
                    value: "جداگانه پرداخت میکنم",
                },
                {
                    key: 1,
                    value: "از حق بیمه سالیانه کسر گردد",
                },
            ],
        },
        {
            id: 12,
            type: "select",
            label: "سرمایه فوت به هر علت",
            name: "death_capital_any_reason_ratio",
            defaultValue: "سرمایه فوت",
            errorMessage: ". سرمایه فوت را انتخاب نمایید !!",
            required: true,
            options: [
                {
                    key: 1,
                    value: "1 برابر سرمایه فوت",
                },
                {
                    key: 2,
                    value: "2 برابر سرمایه فوت",
                },
                {
                    key: 3,
                    value: "3 برابر سرمایه فوت",
                },
                {
                    key: 4,
                    value: "4 برابر سرمایه فوت",
                },
                {
                    key: 5,
                    value: "5 برابر سرمایه فوت",
                },
                {
                    key: 6,
                    value: "6 برابر سرمایه فوت",
                },
                {
                    key: 7,
                    value: "7 برابر سرمایه فوت",
                },
                {
                    key: 8,
                    value: "8 برابر سرمایه فوت",
                },
                {
                    key: 9,
                    value: "9 برابر سرمایه فوت",
                },
                {
                    key: 10,
                    value: "10 برابر سرمایه فوت",
                },
                {
                    key: 11,
                    value: "11 برابر سرمایه فوت",
                },
                {
                    key: 12,
                    value: "12 برابر سرمایه فوت",
                },
                {
                    key: 13,
                    value: "13 برابر سرمایه فوت",
                },
                {
                    key: 14,
                    value: "14 برابر سرمایه فوت",
                },
                {
                    key: 15,
                    value: "15 برابر سرمایه فوت",
                },
                {
                    key: 16,
                    value: "16 برابر سرمایه فوت",
                },
                {
                    key: 17,
                    value: "17 برابر سرمایه فوت",
                },
                {
                    key: 18,
                    value: "18 برابر سرمایه فوت",
                },
                {
                    key: 19,
                    value: "19 برابر سرمایه فوت",
                },
                {
                    key: 20,
                    value: "20 برابر سرمایه فوت",
                },
                {
                    key: 21,
                    value: "21 برابر سرمایه فوت",
                },
                {
                    key: 22,
                    value: "22 برابر سرمایه فوت",
                },
                {
                    key: 23,
                    value: "23 برابر سرمایه فوت",
                },
                {
                    key: 24,
                    value: "24 برابر سرمایه فوت",
                },
                {
                    key: 25,
                    value: "25 برابر سرمایه فوت",
                },
            ],
        },
        {
            id: 13,
            type: "select",
            label: "افزایش سالانه سرمایه",
            name: "capital_increase",
            errorMessage: ". ابتدا افزایش سالانه حق بیمه را انتخاب نمایید !!",
            required: true,
            options: capitalIncreases,
        },
        {
            id: 14,
            type: "select",
            label: "فوت بر اثر حادثه",
            name: "death_capital_incident_ratio",
            defaultValue: "مایل به دریافت نیستم",
            options: capitalIncidents,
        },
        {
            id: 15,
            type: "select",
            label: "نقص عضو و از کارافتادگی",
            name: "maim_ratio",
            defaultValue: "مایل به دریافت نیستم",
            options: capitalIncidents,
        },
        {
            id: 16,
            type: "select",
            label: "هزینه پزشکی ناشی از حادثه",
            name: "has_medical_cost",
            defaultValue: "خیر",
            options: [
                {
                    key: 1,
                    value: "بله",
                },
            ],
        },
        {
            id: 17,
            type: "select",
            label: "بسته تکمیلی خطرات اضافی",
            name: "additional_dangers",
            defaultValue: "خیر",
            options: [
                {
                    key: 1,
                    value: "بله",
                },
            ],
        },
        {
            id: 18,
            type: "select",
            label: "غرامت بستری",
            name: "hospitalization",
            defaultValue: "خیر",
            options: [
                {
                    key: 1,
                    value: "بله",
                },
            ],
        },
        {
            id: 19,
            type: "select",
            label: "معافیت از پرداخت حق بیمه",
            name: "exemption",
            defaultValue: "خیر",
            options: [
                {
                    key: 1,
                    value: "بله",
                },
            ],
        },
        {
            id: 20,
            type: "select",
            label: "امراض خاص",
            name: "special_diseases_ratio",
            defaultValue: "مایل به دریافت نیستم",
            options: [
                {
                    key: 1,
                    value: "1 برابر سرمایه فوت",
                },
                {
                    key: 2,
                    value: "2 برابر سرمایه فوت",
                },
            ],
        },
        /*
        ,{
            id: 44,
            name: "password",
            type: "password",
            placeholder: "Password",
            errorMessage:
                "Password should be 8-20 characters and include at least 1 letter, 1 number and 1 special character!",
            label: "Password",
            pattern: `^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$`,
            required: true,
        },
        {
            id: 55,
            name: "confirmPassword",
            type: "password",
            placeholder: "Confirm Password",
            errorMessage: "Passwords don't match!",
            label: "Confirm Password",
            pattern: values.password,
            required: true,
        },
        */
    ];

    const onChange = (e) => {
        setValues({ ...values, [e.target.name]: e.target.value });
        handleChange(e);
    };

    const handleChange = (e) => {
        switch (e.target.name) {
            case "insurance_target":
                handleInsuranceTarget(e);
                break;
            case "birth_year":
                handleBirth(e);
                break;
            case "birth_month":
                handleBirth(e);
                break;
            case "birth_day":
                handleBirth(e);
                break;
            case "payment_method":
                handlePaymentMethod(e);
                break;
            case "annual_payment":
                handleAnnualPayment(e);
                break;
            case "first_job_level":
                handleFirstJobLevel(e);
                break;
            case "annual_payment_increase":
                handleAnnualPaymentIncrease(e);
                break;
            case "death_capital_incident_ratio":
                handleDeathCapitalIncidentRatio(e);
                break;
            case "has_medical_cost":
                handleHasMedicalCost(e);
                break;
            default:
                break;
        }
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        alert("فرم ثبت شد");
    };

    const updateAge = (e) => {
        age.current =
            now.year -
            (e.target.name == "birth_year"
                ? e.target.value
                    ? e.target.value
                    : now.year
                : values["birth_year"]
                ? values["birth_year"]
                : now.yaer) -
            (now.month <
            (e.target.name == "birth_month"
                ? e.target.value
                    ? e.target.value
                    : now.month
                : values["birth_month"]
                ? values["birth_month"]
                : now.month)
                ? 1
                : 0) -
            (now.month ==
                (e.target.name == "birth_month"
                    ? e.target.value
                        ? e.target.value
                        : now.month
                    : values["birth_month"]
                    ? values["birth_month"]
                    : now.month) &&
            now.day <
                (e.target.name == "birth_day"
                    ? e.target.value
                        ? e.target.value
                        : now.day
                    : values["birth_day"]
                    ? values["birth_day"]
                    : now.day)
                ? 1
                : 0);
        updateDurations();
    };

    const updateDurations = (e) => {
        age.current >= 59
            ? setDurations(
                  [...Array(66 - age.current).keys()].map((i) => 5 + i)
              )
            : age.current >= 49
            ? setDurations(
                  [...Array(77 - age.current).keys()].map((i) => 5 + i)
              )
            : age.current
            ? setDurations([...Array(26).keys()].map((i) => 5 + i))
            : [];
    };

    const updateDividedPayment = (e) => {
        if (e.target.name == "annual_payment") {
            setValues({
                ...values,
                [e.target.name]: parseInt(e.target.value.replace(/,/g, ""))
                    ? parseInt(
                          e.target.value.replace(/,/g, "")
                      ).toLocaleString()
                    : 0,
                divided_payment: parseInt(
                    values["payment_method"]
                        ? parseInt(e.target.value.replace(/,/g, "")) /
                              parseInt(values["payment_method"])
                        : "0"
                ).toLocaleString(),
            });
        } else {
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                divided_payment: parseInt(
                    e.target.value
                        ? parseInt(values["annual_payment"].replace(/,/g, "")) /
                              parseInt(e.target.value)
                        : "0"
                ).toLocaleString(),
            });
        }
    };

    const updateCapitalIncidents = (e) => {
        const array = [];
        for (let i = 1; i <= (age.current >= 15 ? 4 : 1); i++) {
            array.push({
                key: i,
                value: i.toLocaleString() + " برابر سرمایه فوت",
            });
        }
        setCapitalIncidents(array);
    };

    const handleInsuranceTarget = (e) => {
        setErrors({ ...errors, birth_year: "" });
        if (e.target.value == "خودم") {
            if (age.current < 18) {
                setValues({ ...values, birth_year: "" });
                setErrors({
                    ...errors,
                    birth_year:
                        ". سن شما کمتر از 18 سال است. نمی توانید خود را بیمه کنید !!",
                });
                setDurations([]);
            }
        }
    };

    const handleBirth = (e) => {
        setErrors({ ...errors, [e.target.name]: "" });
        updateAge(e);
        updateCapitalIncidents(e);
        if (age.current > 64) {
            setValues({ ...values, [e.target.name]: "" });
            setErrors({
                ...errors,
                [e.target.name]: ". حداکثر سن 64 سال است !!",
            });
            setDurations([]);
            setCapitalIncidents([]);
        } else if (age.current < 18) {
            if (values["insurance_target"] == "خودم") {
                setValues({ ...values, [e.target.name]: "" });
                setErrors({
                    ...errors,
                    [e.target.name]:
                        ". سن شما کمتر از 18 سال است. نمی توانید خود را بیمه کنید !!",
                });
                setDurations([]);
                setCapitalIncidents([]);
            }
        }
    };

    const handlePaymentMethod = (e) => {
        setErrors({ ...errors, annual_payment: "" });
        if (e.target.value == "12") {
            if (
                (values["annual_payment"]
                    ? values["annual_payment"].replace(/,/g, "")
                    : 0) < 6000000
            ) {
                setValues({
                    ...values,
                    annual_payment: "",
                    divided_payment: "",
                });
                setErrors({
                    ...errors,
                    annual_payment:
                        ". برای پرداخت ماهانه مبلغ باید بیشتر از 000'000'6 ریال باشد !!",
                });
            } else {
                updateDividedPayment(e);
            }
        } else {
            if (
                (values["annual_payment"]
                    ? values["annual_payment"].replace(/,/g, "")
                    : 0) < 4000000
            ) {
                setValues({
                    ...values,
                    annual_payment: "",
                    divided_payment: "",
                });
                setErrors({
                    ...errors,
                    annual_payment: ". حداقل مبلغ 000'000'4 ریال می باشد !!",
                });
            } else {
                updateDividedPayment(e);
            }
        }
    };

    const handleAnnualPayment = (e) => {
        setErrors({ ...errors, [e.target.name]: "" });
        if (values["payment_method"] == "12") {
            if (e.target.value.replace(/,/g, "") < 6000000) {
                // setValues({
                //     ...values,
                //     payment_method: "",
                //     divided_payment: "",
                // });
                values["payment_method"] = "";
                values["divided_payment"] = "";
                setErrors({
                    ...errors,
                    [e.target.name]:
                        ". برای پرداخت ماهانه مبلغ باید بیشتر از 000'000'6 ریال باشد !!",
                });
            }
        } else {
            if (e.target.value.replace(/,/g, "") < 4000000) {
                // setValues({
                //     ...values,
                //     payment_method: "",
                //     divided_payment: "",
                // });
                values["payment_method"] = "";
                values["divided_payment"] = "";
                setErrors({
                    ...errors,
                    [e.target.name]: ". حداقل مبلغ 000'000'4 ریال می باشد !!",
                });
            }
        }
        updateDividedPayment(e);
    };

    const handleFirstJobLevel = (e) => {
        setValues({
            ...values,
            first_job_level_id: "",
            first_job_level: e.target.value,
        });
        setJobResults(
            e.target.value.length > 2
                ? jobs.filter((value) => {
                      return value.caption
                          .toLowerCase()
                          .includes(e.target.value.toLowerCase());
                  })
                : []
        );
    };

    const onClickJobResults = (e) => {
        setValues({
            ...values,
            first_job_level_id: e.target.value,
            first_job_level: e.target.innerHTML,
        });
        setJobResults([]);
    };

    const handleAnnualPaymentIncrease = (e) => {
        const array = [];
        if (e.target.value)
            for (let i = 0; i <= e.target.value / 5 && i < 5; i++) {
                array.push({
                    key: i * 5,
                    value: (i * 5).toLocaleString() + " %",
                });
            }
        setCapitalIncreases(array);
    };

    const handleDeathCapitalIncidentRatio = (e) => {
        if (e.target.value) {
            setDisableds({
                ...disableds,
                maim_ratio: false,
                has_medical_cost: false,
            });
        } else {
            setDisableds({
                ...disableds,
                maim_ratio: true,
                has_medical_cost: true,
                additional_dangers: true,
                hospitalization: true,
            });
            setValues({
                ...values,
                maim_ratio: "",
                has_medical_cost: "",
                additional_dangers: "",
                hospitalization: "",
                death_capital_incident_ratio: "",
            });
        }
    };

    const handleHasMedicalCost = (e) => {
        if (e.target.value) {
            setDisableds({
                ...disableds,
                additional_dangers: false,
                hospitalization: false,
            });
        } else {
            setDisableds({
                ...disableds,
                additional_dangers: true,
                hospitalization: true,
            });
            setValues({
                ...values,
                has_medical_cost: "",
                additional_dangers: "",
                hospitalization: "",
            });
        }
    };

    return (
        <div className="life-compare">
            <form onSubmit={handleSubmit} className="life-compare-form">
                <h1 className="life-compare-h1">استعلام قیمت</h1>
                {inputs.map((input) => (
                    <FormInput
                        key={input.id}
                        {...input}
                        value={values[input.name]}
                        error={errors[input.name]}
                        disabled={disableds[input.name]}
                        onChange={onChange}
                        onClick={
                            input.name == "first_job_level"
                                ? onClickJobResults
                                : null
                        }
                    />
                ))}
                <button className="life-compare-button">ثبت نام</button>
            </form>
        </div>
    );
}

export default LifeCompare;
