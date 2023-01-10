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
    const { setNotification, setNext, user } = useStateContext();
    const [ServerErrors, setServerErrors] = useState(null);
    const [insuranced, setInsuranced] = useState({});
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
    });
    const [disableds, setDisableds] = useState({
        birth: true,
        military_service_details: true,
        military_service_reason: true,
    });

    useEffect(() => {
        axiosClient.get("/insuranced").then(({ data }) => {
            setInsuranced(data);
        });














        
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
        // alert("فرم ثبت شد");
        if (values.national_code) {
            const payload = {
                national_code: values.national_code,
            };
            axiosClient
                .post("/life-medical-info", payload)
                .then(({ data }) => {
                    setNotification("ثبت اطلاعات با موفقیت انجام شد !");
                    console.log(data);
                    setTimeout(() => {
                        navigate("/life");
                    }, 3000);
                })
                .catch((err) => {
                    const response = err.response;
                    if (response) {
                        setServerErrors(err.response.data.errors);
                    }
                });
        }
    };

    const onChange = (e) => {
        setValues({ ...values, [e.target.name]: e.target.value });
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
            case "military_service_status":
                handleMilitaryServiceStatus(e);
                break;
            default:
                break;
        }
    };

    const handleNationalCode = (e) => {
        setErrors({ ...errors, [e.target.name]: "" });
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
        const validNumber = new RegExp("^(?=.*?[A-Za-z])(?=.*?[0-9]).{6,}$");
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
