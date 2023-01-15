import { useState, useEffect, useRef } from "react";
import { useNavigate, useParams } from "react-router-dom";
import Cookies from "universal-cookie";
import DateObject from "react-date-object";
import persian from "react-date-object/calendars/persian";
import persian_fa from "react-date-object/locales/persian_fa";
import { useStateContext } from "../../context/ContextProvider.jsx";
import axiosClient from "../../axios-client.js";
import FormInput from "./FormInput";
import "./lifeCompare.css";

function LifeMedicalInfo() {
    const navigate = useNavigate();
    const { setNotification, insurancedId, setInsurancedId, user } =
        useStateContext();
    const [ServerErrors, _setServerErrors] = useState(null);
    const setServerErrors = (errors) => {
        _setServerErrors(errors);

        setTimeout(() => {
            _setServerErrors("");
        }, 20000);
    };
    const [values, setValues] = useState({
        national_code: "",
        birth: "",
        mobile_number: "",
        ins_target_height: "",
        ins_target_weight: "",
        gender: "",
        military_service_status: "",
        military_service_details: "",
        military_service_reason: "",
        father_life_status: "",
        father_age: "",
        father_death_reason: "",
        mother_life_status: "",
        mother_age: "",
        mother_death_reason: "",
        family_health_history: "",
        family_health_history_reason: "",
        smoking_status: "",
        hospitalization_status: "",
        hospitalization_reason: "",
        physical_impairment: "",
        drug_usage: "",
        health_status: "",
        disease_type: "",
        weight_loss: "",
        weight_loss_reason: "",
    });
    const [errors, setErrors] = useState({
        national_code: "",
        mobile_number: "",
        ins_target_height: "",
        ins_target_weight: "",
        military_service_status: "",
        military_service_details: "",
        military_service_reason: "",
        father_age: "",
        father_death_reason: "",
        hospitalization_reason: "",
    });
    const [disableds, setDisableds] = useState({
        birth: true,
        military_service_status: true,
        military_service_details: true,
        military_service_reason: true,
        father_death_reason: true,
        mother_death_reason: true,
        family_health_history_reason: true,
        hospitalization_reason: true,
        disease_type: true,
        weight_loss_reason: true,
    });

    useEffect(() => {
        if (insurancedId) {
            axiosClient
                .get(`/assgin-insurance-to-user/${insurancedId}`)
                .then(({ data }) => {
                    setValues({ ...values, birth: data });
                });
        } else {
            navigate("/life-insurance");
        }
    }, []);

    const inputs = [
        {
            id: 1,
            type: "text",
            label: "کد ملی",
            name: "national_code",
            placeholder: "1234567890",
            errorMessage: ". کد ملی خود را وارد کنید!!",
            required: true,
        },
        {
            id: 2,
            type: "text",
            label: "تاریخ تولد",
            name: "birth",
            placeholder: "روز / ماه / سال",
        },
        {
            id: 3,
            type: "text",
            label: "شماره موبایل بیمه شده",
            name: "mobile_number",
            placeholder: "09121234567",
            errorMessage: ". شماره موبایل بیمه شده را وارد کنید!!",
            required: true,
            // pattern: "^(\+98|0)?9\d{9}$",
        },
        {
            id: 4,
            type: "text",
            label: "قد بیمه شده",
            name: "ins_target_height",
            placeholder: "150",
            errorMessage: ". قد بیمه شده را وارد کنید!!",
            required: true,
        },
        {
            id: 5,
            type: "text",
            label: "وزن بیمه شده",
            name: "ins_target_weight",
            placeholder: "70",
            errorMessage: ". وزن بیمه شده را وارد کنید!!",
            required: true,
        },
        {
            id: 6,
            type: "select",
            label: "جنسیت بیمه شده",
            name: "gender",
            errorMessage: ". جنسیت بیمه شده را وارد کنید!!",
            required: true,
            options: [
                {
                    key: 1,
                    value: "مرد",
                },
                {
                    key: 2,
                    value: "زن",
                },
            ],
        },
        {
            id: 7,
            type: "select",
            label: "وضعیت خدمت سربازی",
            name: "military_service_status",
            defaultValue: {
                key: null,
                value: "انتخاب کنید",
            },
            options: [
                {
                    key: 1,
                    value: "انجام شده",
                },
                {
                    key: 2,
                    value: "انجام نشده",
                },
                {
                    key: 3,
                    value: "معافیت غیر پزشکی",
                },
                {
                    key: 4,
                    value: "معافیت پزشکی",
                },
            ],
        },
        {
            id: 8,
            type: "text",
            label: "جزئیات معافیت",
            name: "military_service_details",
            placeholder: "ماده/ بند/ سال معافیت",
        },
        {
            id: 9,
            type: "text",
            label: "علت معافیت",
            name: "military_service_reason",
            placeholder: "علت معافیت",
        },
        {
            id: 10,
            type: "select",
            label: "تاریخچه فامیلی",
            name: "father_life_status",
            defaultValue: {
                key: 1,
                value: "پدر در قید حیات می باشد",
            },
            options: [
                {
                    key: 0,
                    value: "پدر در قید حیات نمی باشد",
                },
            ],
        },
        {
            id: 11,
            type: "text",
            name: "father_age",
            placeholder: "سن فعلی",
            errorMessage: ". سن پدر بیمه شده را وارد کنید!!",
            required: true,
        },
        {
            id: 12,
            type: "text",
            name: "father_death_reason",
            placeholder: "علت فوت",
        },
        {
            id: 13,
            type: "select",
            name: "mother_life_status",
            defaultValue: {
                key: 1,
                value: "مادر در قید حیات می باشد",
            },
            options: [
                {
                    key: 0,
                    value: "مادر در قید حیات نمی باشد",
                },
            ],
        },
        {
            id: 14,
            type: "text",
            name: "mother_age",
            placeholder: "سن فعلی",
            errorMessage: ". سن مادر بیمه شده را وارد کنید!!",
            required: true,
        },
        {
            id: 15,
            type: "text",
            name: "mother_death_reason",
            placeholder: "علت فوت",
        },
        {
            id: 16,
            type: "select",
            label: "سابقه بیماری افراد خانواده",
            name: "family_health_history",
            defaultValue: {
                key: 0,
                value: "افراد خانواده سابقه بیماری نداشته اند",
            },
            options: [
                {
                    key: 1,
                    value: "افراد خانواده قبلا سابقه بیماری داشته اند",
                },
            ],
        },
        {
            id: 17,
            type: "text",
            label: "توضیحات سابقه بیماری خانوادگی",
            name: "family_health_history_reason",
            placeholder:
                "لطفا نسبت فرد با بیمه شده و نوع بیماری را ذکر فرمایید",
        },
        {
            id: 18,
            type: "select",
            label: "استعمال دخانیات",
            name: "smoking_status",
            defaultValue: {
                key: 0,
                value: "خیر",
            },
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
            label: "سابقه بستری و یا جراحی قبلی",
            name: "hospitalization_status",
            defaultValue: {
                key: 0,
                value: "خیر",
            },
            options: [
                {
                    key: 1,
                    value: "بله",
                },
            ],
        },
        {
            id: 20,
            type: "text",
            label: "دلیل بستری شدن",
            name: "hospitalization_reason",
            placeholder: "اگر قبلا در بیمارستان بستری بودید علت آن را ذکر کنید",
        },
        {
            id: 21,
            type: "text",
            label: "سابقه جسمانی",
            name: "physical_impairment",
            placeholder:
                "اگر قبلا سابقه نقص عضو و یا از کار افتادگی داشتید، علت آن را بیان کنید",
        },
        {
            id: 22,
            type: "text",
            label: "مصرف روزانه دارو",
            name: "drug_usage",
            placeholder:
                " اگر به صورت مرتب و روزانه دارو مصرف میکنید لطفا نام آن را قید نمایید",
        },
        {
            id: 23,
            type: "select",
            label: "وضعیت سلامتی فعلی",
            name: "health_status",
            defaultValue: {
                key: 1,
                value: "در سلامت کامل هستم",
            },
            options: [
                {
                    key: 0,
                    value: "در حال حاضر سلامتی کامل ندارم",
                },
            ],
        },
        {
            id: 24,
            type: "text",
            label: "ابتلا به بیماری",
            name: "disease_type",
            placeholder:
                " در صورتی که مبتلا به بیماری خاصی می باشید، نوع آن را قید نمایید",
        },
        {
            id: 25,
            type: "select",
            label: "کاهش/افزایش وزن",
            name: "weight_loss",
            defaultValue: {
                key: 0,
                value: "تغییر محسوسی نداشته ام",
            },
            options: [
                {
                    key: 1,
                    value: "در 6 ماه گذشته بیش از 10 کیلوگرم کاهش",
                },
                {
                    key: 2,
                    value: "در 6 ماه گذشته بیش از 10 کیلوگرم افزایش",
                },
            ],
        },
        {
            id: 26,
            type: "text",
            label: "توضیحات تکمیلی کاهش/افزایش وزن",
            name: "weight_loss_reason",
            placeholder: " لطفا علت کاهش/افزایش وزن را بیان نمایید",
        },
    ];

    const handleSubmit = (e) => {
        e.preventDefault();
        setServerErrors(null);
        // console.log(values.father_life_status , "1");
        // return;
        // alert("فرم ثبت شد");
        if (!new RegExp("^0\\d{9}$").test(values.national_code)) {
            setValues({ ...values, national_code: "" });
            setErrors({
                ...errors,
                national_code: ". فرمت کد ملی بیمه شده اشتباه است !!",
            });
            return;
        }
        if (!new RegExp("^(\\+98|0)?9\\d{9}$").test(values.mobile_number)) {
            // 09\d{9}
            setValues({ ...values, mobile_number: "" });
            setErrors({
                ...errors,
                mobile_number: ". فرمت شماره موبایل بیمه شده اشتباه است !!",
            });
            // values.mobile_number = "";
            // errors.mobile_number = ". فرمت شماره موبایل بیمه شده اشتباه است !!";
            return;
        }
        if (
            values.ins_target_height >= 300 ||
            values.ins_target_height <= 100
        ) {
            setValues({ ...values, ins_target_height: "" });
            setErrors({
                ...errors,
                ins_target_height: ". قد بیمه شده پوشش داده نمی شود !!",
            });
            return;
        }
        if (values.ins_target_weight > 300) {
            setValues({ ...values, ins_target_weight: "" });
            setErrors({
                ...errors,
                ins_target_weight: ". وزن بیمه شده پوشش داده نمی شود !!",
            });
            return;
        }
        if (!disableds.military_service_status) {
            if (!values.military_service_status) {
                setValues({ ...values, military_service_status: "" });
                setErrors({
                    ...errors,
                    military_service_status:
                        ". وضعیت خدمت سربازی را انتخاب کنید !!",
                });
                return;
            }
        }
        if (!disableds.military_service_details) {
            if (!values.military_service_details) {
                setValues({ ...values, military_service_details: "" });
                setErrors({
                    ...errors,
                    military_service_details: ". جزئیات معافیت را وارد کنید !!",
                });
                return;
            } else if (
                !new RegExp("^\\d{4}\\/\\d{1,2}\\/\\d{1,2}$").test(
                    values.military_service_details
                )
            ) {
                setValues({ ...values, military_service_details: "" });
                setErrors({
                    ...errors,
                    military_service_details:
                        ". فرمت جزئیات معافیت اشتباه است !!",
                });
                return;
            }
        }
        if (!disableds.military_service_reason) {
            if (!values.military_service_reason) {
                setValues({ ...values, military_service_reason: "" });
                setErrors({
                    ...errors,
                    military_service_reason: ". علت معافیت را وارد کنید !!",
                });
                return;
            } else if (
                !new RegExp("^[\u0600-\u06FFs]+$").test(
                    values.military_service_reason
                )
            ) {
                setValues({ ...values, military_service_reason: "" });
                setErrors({
                    ...errors,
                    military_service_reason: ". علت معافیت باید فارسی باشد !!",
                });
                return;
            }
        }
        if (!disableds.father_death_reason) {
            if (!values.father_death_reason) {
                setValues({ ...values, father_death_reason: "" });
                setErrors({
                    ...errors,
                    father_death_reason:
                        ". علت فوت پدر بیمه شده را وارد کنید !!",
                });
                return;
            } else if (
                !new RegExp("^[\u0600-\u06FFs]+$").test(
                    values.father_death_reason
                )
            ) {
                setValues({ ...values, father_death_reason: "" });
                setErrors({
                    ...errors,
                    father_death_reason: ". علت فوت پدر باید فارسی باشد !!",
                });
                return;
            }
        }
        if (!disableds.mother_death_reason) {
            if (!values.mother_death_reason) {
                setValues({ ...values, mother_death_reason: "" });
                setErrors({
                    ...errors,
                    mother_death_reason:
                        ". علت فوت مادر بیمه شده را وارد کنید !!",
                });
                return;
            } else if (
                !new RegExp("^[\u0600-\u06FFs]+$").test(
                    values.mother_death_reason
                )
            ) {
                setValues({ ...values, mother_death_reason: "" });
                setErrors({
                    ...errors,
                    mother_death_reason: ". علت فوت مادر باید فارسی باشد !!",
                });
                return;
            }
        }
        if (!disableds.family_health_history_reason) {
            if (!values.family_health_history_reason) {
                setValues({ ...values, family_health_history_reason: "" });
                setErrors({
                    ...errors,
                    family_health_history_reason:
                        ". توضیحات سابقه بیماری خانوادگی را وارد کنید !!",
                });
                return;
            } else if (
                !new RegExp("^[\u0600-\u06FFs]+$").test(
                    values.family_health_history_reason
                )
            ) {
                setValues({ ...values, family_health_history_reason: "" });
                setErrors({
                    ...errors,
                    family_health_history_reason:
                        ". توضیحات سابقه باید فارسی باشد !!",
                });
                return;
            }
        }
        if (!disableds.hospitalization_reason) {
            if (!values.hospitalization_reason) {
                setValues({ ...values, hospitalization_reason: "" });
                setErrors({
                    ...errors,
                    hospitalization_reason: ". دلیل بستری شدن را وارد کنید !!",
                });
                return;
            } else if (
                !new RegExp("^[\u0600-\u06FFs]+$").test(
                    values.hospitalization_reason
                )
            ) {
                setValues({ ...values, hospitalization_reason: "" });
                setErrors({
                    ...errors,
                    hospitalization_reason: ". دلیل بستری باید فارسی باشد !!",
                });
                return;
            }
        }
        if (!disableds.disease_type) {
            if (
                !new RegExp("^[\u0600-\u06FFs]+$").test(values.disease_type) &&
                values.disease_type
            ) {
                setValues({ ...values, disease_type: "" });
                setErrors({
                    ...errors,
                    disease_type: ". نوع بیماری باید فارسی باشد !!",
                });
                return;
            }
        }

        axiosClient
            .post("/check-national-code", {
                national_code: values.national_code,
                birth: values.birth,
            })
            .then(({ data }) => {
                console.log(data);
                // setTimeout(() => {
                //     navigate("/life");
                // }, 3000);
            })
            .catch((err) => {
                const response = err.response;
                if (response) {
                    setServerErrors(err.response.data.errors);
                }
                return;
            });

        const payload = {
            id: insurancedId,
            national_code: values.national_code,
            // birth: values.birth,
            mobile_number: values.mobile_number,
            ins_target_height: values.ins_target_height,
            ins_target_weight: values.ins_target_weight,
            gender: values.gender,
            military_service_status: values.military_service_status,
            military_service_details: values.military_service_details,
            military_service_reason: values.military_service_reason,
            father_life_status: values.father_life_status
                ? values.father_life_status
                : "1",
            father_age: values.father_age,
            father_death_reason: values.father_death_reason,
            mother_life_status: values.mother_life_status
                ? values.mother_life_status
                : "1",
            mother_age: values.mother_age,
            mother_death_reason: values.mother_death_reason,
            family_health_history: values.family_health_history
                ? values.family_health_history
                : "0",
            family_health_history_reason: values.family_health_history_reason,
            smoking_status: values.smoking_status ? values.smoking_status : "0",
            hospitalization_status: values.hospitalization_status
                ? values.hospitalization_status
                : "0",
            hospitalization_reason: values.hospitalization_reason,
            physical_impairment: values.physical_impairment
                ? values.physical_impairment
                : "1",
            drug_usage: values.drug_usage,
            health_status: values.health_status ? values.health_status : "1",
            disease_type: values.disease_type,
            weight_loss: values.weight_loss ? values.weight_loss : "0",
            weight_loss_reason: values.weight_loss_reason,
        };
        axiosClient
            .post("/life-medical-info", payload, { responseType: "blob" })
            .then(({ data }) => {
                setNotification("ثبت اطلاعات با موفقیت انجام شد !");
                console.log(data);
                const url = window.URL.createObjectURL(new Blob([data]));
                const link = document.createElement("a");
                link.href = url;
                link.setAttribute("download", "life.xlsx");
                document.body.appendChild(link);
                link.click();
                setInsurancedId(null);
                setTimeout(() => {
                    navigate("/lifes");
                }, 100);
            })
            .catch((err) => {
                const response = err.response;
                if (response) {
                    setServerErrors(err.response.data.errors);
                }
            });
        window.scrollTo({
            top: 100,
            behavior: "smooth",
        });
    };

    const onChange = (e) => {
        setValues({ ...values, [e.target.name]: e.target.value });
        setErrors({ ...errors, [e.target.name]: "" });
        handleChange(e);
    };

    const handleChange = (e) => {
        switch (e.target.name) {
            case "national_code":
                handleNationalCode(e);
                break;
            case "mobile_number":
                handleMobileNumber(e);
                break;
            case "ins_target_height":
                handleInsTargetHeight(e);
                break;
            case "ins_target_weight":
                handleInsTargetWeight(e);
                break;
            case "gender":
                handleGender(e);
                break;
            case "military_service_status":
                handleMilitaryServiceStatus(e);
                break;
            case "father_life_status":
                handleFatherLifeStatus(e);
                break;
            case "father_age":
                handleAge(e);
                break;
            case "mother_life_status":
                handleMotherLifeStatus(e);
                break;
            case "mother_age":
                handleAge(e);
                break;
            case "family_health_history":
                handleFamilyHealthHistory(e);
                break;
            case "hospitalization_status":
                handleHospitalizationStatus(e);
                break;
            case "health_status":
                handleHealthStatus(e);
                break;
            case "weight_loss":
                handleWeightLoss(e);
                break;
            default:
                break;
        }
    };

    const handleNationalCode = (e) => {
        // console.log(new RegExp("^0\\d{9}$").test(values.national_code));
        // console.log(new RegExp("0\\d").test(e.target.value));
    };

    const handleMobileNumber = (e) => {
        // setValues({
        //     ...values,
        //     [e.target.name]: parseInt(e.target.value)
        //         ? parseInt(e.target.value)
        //         : "0",
        // });
    };

    const handleInsTargetHeight = (e) => {
        setValues({
            ...values,
            [e.target.name]: parseInt(e.target.value)
                ? parseInt(e.target.value) < 300
                    ? parseInt(e.target.value)
                    : "300"
                : "",
        });
    };

    const handleInsTargetWeight = (e) => {
        setValues({
            ...values,
            [e.target.name]: parseInt(e.target.value)
                ? parseInt(e.target.value) < 300
                    ? parseInt(e.target.value)
                    : "300"
                : "",
        });
    };

    const handleGender = (e) => {
        if (e.target.value == "1") {
            setDisableds({
                ...disableds,
                military_service_status: false,
            });
        } else {
            setErrors({
                ...errors,
                military_service_status: "",
            });
            setDisableds({
                ...disableds,
                military_service_status: true,
                military_service_details: true,
                military_service_reason: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                military_service_status: "",
                military_service_details: "",
                military_service_reason: "",
            });
        }
    };

    const handleMilitaryServiceStatus = (e) => {
        if (e.target.value == "4") {
            setDisableds({
                ...disableds,
                military_service_details: false,
                military_service_reason: false,
            });
        } else {
            setDisableds({
                ...disableds,
                military_service_details: true,
                military_service_reason: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                military_service_details: "",
                military_service_reason: "",
            });
        }
    };

    const handleFatherLifeStatus = (e) => {
        document.getElementsByName("father_age")[0].placeholder =
            e.target.value == "0" ? "سن فوت" : "سن فعلی";
        if (e.target.value == "0") {
            setDisableds({
                ...disableds,
                father_death_reason: false,
            });
        } else {
            setErrors({
                ...errors,
                father_death_reason: "",
            });
            setDisableds({
                ...disableds,
                father_death_reason: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                father_death_reason: "",
            });
        }
    };

    const handleMotherLifeStatus = (e) => {
        document.getElementsByName("mother_age")[0].placeholder =
            e.target.value == "0" ? "سن فوت" : "سن فعلی";
        if (e.target.value == "0") {
            setDisableds({
                ...disableds,
                mother_death_reason: false,
            });
        } else {
            setErrors({
                ...errors,
                mother_death_reason: "",
            });
            setDisableds({
                ...disableds,
                mother_death_reason: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                mother_death_reason: "",
            });
        }
    };

    const handleAge = (e) => {
        setValues({
            ...values,
            [e.target.name]: parseInt(e.target.value)
                ? parseInt(e.target.value) < 150
                    ? parseInt(e.target.value)
                    : "150"
                : "",
        });
    };

    const handleFamilyHealthHistory = (e) => {
        if (e.target.value == "1") {
            setDisableds({
                ...disableds,
                family_health_history_reason: false,
            });
        } else {
            setErrors({
                ...errors,
                family_health_history_reason: "",
            });
            setDisableds({
                ...disableds,
                family_health_history_reason: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                family_health_history_reason: "",
            });
        }
    };

    const handleHospitalizationStatus = (e) => {
        if (e.target.value == "1") {
            setDisableds({
                ...disableds,
                hospitalization_reason: false,
            });
        } else {
            setErrors({
                ...errors,
                hospitalization_reason: "",
            });
            setDisableds({
                ...disableds,
                hospitalization_reason: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                hospitalization_reason: "",
            });
        }
    };

    const handleHealthStatus = (e) => {
        if (e.target.value == "0") {
            setDisableds({
                ...disableds,
                disease_type: false,
            });
        } else {
            setErrors({
                ...errors,
                disease_type: "",
            });
            setDisableds({
                ...disableds,
                disease_type: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                disease_type: "",
            });
        }
    };

    const handleWeightLoss = (e) => {
        if (e.target.value == "0") {
            setErrors({
                ...errors,
                weight_loss_reason: "",
            });
            setDisableds({
                ...disableds,
                weight_loss_reason: true,
            });
            setValues({
                ...values,
                [e.target.name]: e.target.value,
                weight_loss_reason: "",
            });
        } else {
            setDisableds({
                ...disableds,
                weight_loss_reason: false,
            });
        }
    };

    return (
        <div className="life-compare">
            <form onSubmit={handleSubmit} className="life-compare-form">
                <h1 className="life-compare-h1">هزینه های پزشکی</h1>
                {ServerErrors && (
                    <div className="alert">
                        {Object.keys(ServerErrors).map((key) => (
                            <p key={key}>{ServerErrors[key][0]}</p>
                        ))}
                    </div>
                )}
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
                                ? onClickFirstJobResults
                                : input.name == "second_job_level" &&
                                  onClickSecondJobResults
                        }
                    />
                ))}
                <button className="life-compare-button">ثبت نام</button>
            </form>
        </div>
    );
}

export default LifeMedicalInfo;
