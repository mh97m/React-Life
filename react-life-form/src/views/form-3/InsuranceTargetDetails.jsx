import { useState, useEffect, useRef, React } from "react";
import { useNavigate, useParams } from "react-router-dom";
import Cookies from "universal-cookie";
import DateObject from "react-date-object";
import persian from "react-date-object/calendars/persian";
import persian_fa from "react-date-object/locales/persian_fa";
import { useStateContext } from "../../context/ContextProvider.jsx";
import axiosClient from "../../axios-client.js";
import InsuranceTargetDetailsItem from "./InsuranceTargetDetailsItem";
import "./insuranceTargetDetails.css";
import InsuranceTargetDetailsHeir from "./InsuranceTargetDetailsHeir.jsx";

function InsuranceTargetDetails() {
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
        user_if_dead: 0,
        national_codes: [],
        heir_targets: [],
        heir_shares: [],
    });
    const [errors, setErrors] = useState({
        user_if_dead: "",
        national_codes: [],
    });
    const [disableds, setDisableds] = useState({});
    const heirs = useRef(1);
    const [heirsElement, setHeirsElement] = useState();

    useEffect(() => {
        // if (!insurancedId) {
        //     navigate("/life-insurance");
        // }
        handleHeirs();
    }, []);

    const inputs = [
        {
            id: 1,
            type: "select",
            label: "استفاده کننده در صورت فوت",
            name: "user_if_dead",
            defaultValue: {
                key: 0,
                value: "خودم انتخاب می کنم",
            },
            options: [
                {
                    key: 1,
                    value: "وراث قانونی  با درصد  مساوی",
                },
                {
                    key: 2,
                    value: "وراث قانونی  به نسبت سهم الارث",
                },
            ],
        },
    ];

    const handleSubmit = (e) => {
        e.preventDefault();
        setServerErrors(null);
        values.national_codes.every(function (national_code, index) {
            console.log(national_code, index);
            if (!new RegExp("^0\\d{9}$").test(national_code)) {
                console.log(values.national_codes[index]);
                console.log(`national_codes[${index}]`);
                // setValues({ ...values, ...national_codes[index]: "" });
                values.national_codes[index] = "";
                console.log(values.national_codes);
                errors.national_codes[index] = ". فرمت کد ملی بیمه شده اشتباه است !!";
                // setErrors({
                //     ...errors,
                //     national_code: ". فرمت کد ملی بیمه شده اشتباه است !!",
                // });
                return;
            }
        });

        console.log(values);
        console.log(errors);
    };

    const onChange = (e) => {
        setValues({ ...values, [e.target.name]: e.target.value });
        setErrors({ ...errors, [e.target.name]: "" });
        handleChange(e);
    };

    const handleChange = (e) => {
        switch (e.target.name) {
            case "user_if_dead":
                handleUserIfDead(e);
                break;
            default:
                break;
        }
    };

    const handleUserIfDead = (e) => {
        if (e.target.value == 0) {
            heirs.current = 1;
            handleHeirs(e);
        } else {
            heirs.current = 0;
            handleHeirs(e);
        }
        // setValues({ ...values, [e.target.name]: e.target.value });
    };

    const handleHeirs = (e) => {
        if (heirs.current == 0) {
            setValues({
                ...values,
                national_codes: [],
                heir_targets: [],
                heir_shares: [],
                [e.target.name]: e.target.value,
            });
            // values.national_codes = [];
            // values.heir_targets = [];
            // values.heir_shares = [];
        }
        setHeirsElement(
            <InsuranceTargetDetailsHeir
                time={heirs.current}
                inputLength={inputs.length}
                values={values}
                errors={errors}
                disableds={disableds}
            />
        );
    };

    const onClickHeir = (e) => {
        if (e.target.className == "heir-add-button") {
            heirs.current < 4 && (heirs.current = heirs.current + 1);
            handleHeirs();
        } else {
            heirs.current > 1 && (heirs.current = heirs.current - 1);
            handleHeirs();
            // setValues({ ...values, [e.target.name]: e.target.value });
            values.national_codes.pop();
            values.heir_targets.pop();
            values.heir_shares.pop();
        }
    };

    return (
        <div className="life-compare">
            <form onSubmit={handleSubmit} className="life-medical-form">
                <h1 className="life-compare-h1">اطلاعات تکمیلی</h1>
                {ServerErrors && (
                    <div className="alert">
                        {Object.keys(ServerErrors).map((key) => (
                            <p key={key}>{ServerErrors[key][0]}</p>
                        ))}
                    </div>
                )}
                {inputs.map((input) => (
                    <InsuranceTargetDetailsItem
                        key={input.id}
                        {...input}
                        value={values[input.name]}
                        error={errors[input.name]}
                        disabled={disableds[input.name]}
                        onChange={onChange}
                        onClick={input.name == "user_if_dead" && onClickHeir}
                        heirsElement={
                            input.name == "user_if_dead" && heirsElement
                        }
                        heirs={input.name == "user_if_dead" && heirs.current}
                    />
                ))}
                <button className="life-compare-button">ثبت نام</button>
            </form>
        </div>
    );
}

export default InsuranceTargetDetails;
