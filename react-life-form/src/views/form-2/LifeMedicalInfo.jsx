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
    const { setNotification, insurancedId, user } = useStateContext();
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
    });
    const [errors, setErrors] = useState({
        national_code: "",
        mobile_number: "",
        ins_target_height: "",
        ins_target_weight: "",
        military_service_status: "",
        military_service_details: "",
        military_service_reason: "",
    });
    const [disableds, setDisableds] = useState({
        birth: true,
        military_service_status: true,
        military_service_details: true,
        military_service_reason: true,
    });

    useEffect(() => {
        if (insurancedId) {
            axiosClient.get("/assgin-insurance-to-user/" + insurancedId).then(({ data }) => {
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
            defaultValue: "انتخاب کنید",
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
    ];

    const handleSubmit = (e) => {
        e.preventDefault();
        setServerErrors(null);
        // alert("فرم ثبت شد");
        if (!(new RegExp("^0\\d{9}$").test(values.national_code))) {
            setValues({ ...values, national_code: "" });
            setErrors({
                ...errors,
                national_code: ". فرمت کد ملی بیمه شده اشتباه است !!",
            });
            return;
        }
        if (!(new RegExp("^(\\+98|0)?9\\d{9}$").test(values.mobile_number))) {
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
        if (!(disableds.military_service_status)) {
            if (!(values.military_service_status)) {
                setValues({ ...values, military_service_status: "" });
                setErrors({
                    ...errors,
                    military_service_status: ". وضعیت خدمت سربازی را انتخاب کنید !!",
                });
                return;
            }
        }
        if (!(disableds.military_service_details)) {
            if (!(values.military_service_details)) {
                setValues({ ...values, military_service_details: "" });
                setErrors({
                    ...errors,
                    military_service_details: ". جزئیات معافیت را وارد کنید !!",
                });
                return;
            } else if (!(new RegExp("^\\d{4}\\/\\d{1,2}\\/\\d{1,2}$").test(values.military_service_details))) {
                setValues({ ...values, military_service_details: "" });
                setErrors({
                    ...errors,
                    military_service_details: ". فرمت جزئیات معافیت اشتباه است !!",
                });
                return;
            }
        }
        if (!(disableds.military_service_reason)) {
            if (!(values.military_service_reason)) {
                setValues({ ...values, military_service_reason: "" });
                setErrors({
                    ...errors,
                    military_service_reason: ". علت معافیت را وارد کنید !!",
                });
                return;
            } else if (!(new RegExp("^[\u0600-\u06FF\s]+$").test(values.military_service_reason))) {
                setValues({ ...values, military_service_reason: "" });
                setErrors({
                    ...errors,
                    military_service_reason: ". علت معافیت باید فارسی باشد !!",
                });
                return;
            }
        }
        const payload = {
            national_code: values.national_code,
            birth: values.birth,
            mobile_number: values.mobile_number,
            ins_target_height: values.ins_target_height,
            ins_target_weight: values.ins_target_weight,
            gender: values.gender,
            military_service_status: values.military_service_status,
            military_service_details: values.military_service_details,
            military_service_reason: values.military_service_reason,
        };
        axiosClient
            .post("/life-medical-info", payload)
            .then(({ data }) => {
                setNotification("ثبت اطلاعات با موفقیت انجام شد !");
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
            });
        // console.log(values.national_code);
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
            default:
                break;
        }
    };

    const handleNationalCode = (e) => {
        // console.log(new RegExp("^0\\d{9}$").test(values.national_code));
        // console.log(new RegExp("0\\d").test(e.target.value));
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
                ? parseInt(e.target.value)
                : "",
        });
    };

    const handleInsTargetWeight = (e) => {
        setValues({
            ...values,
            [e.target.name]: parseInt(e.target.value)
                ? parseInt(e.target.value)
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

    return (
        <div className="life-compare">
            <form onSubmit={handleSubmit} className="life-compare-form">
                <h1 className="life-compare-h1">استعلام قیمت</h1>
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
