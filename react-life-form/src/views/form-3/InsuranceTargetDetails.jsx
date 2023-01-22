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
        national_code: "",
        user_if_dead: "",
    });
    const [disableds, setDisableds] = useState({
        birth: true,
    });
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
        console.log(values);
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

    const addHeir = () => {
        let parent = document.getElementsByClassName("heirs");
        // let national_code = document.createElement('div');
        // let national_code_label = document.createElement('label');
        // let national_code_input = document.createElement('input');
        // national_code.className = "life-compare-form-input";
        // national_code_label.className = "life-compare-label";
        // national_code_input.className = "life-compare-input";
        // national_code_label.innerHTML = "کد ملی ";
        // national_code.appendChild(national_code_label);
        // national_code.appendChild(national_code_input);
        // parent[0].appendChild(national_code);

        // let elements = [];
        // let l = React.createElement("label", { className: "life-compare-label" });
        // l.innerHTML = "کد ملی ";
        // let i = React.createElement("input", { className: "life-compare-input" });
        // elements.push(l);
        // elements.push(i);
        // let n = React.createElement("div", { className: "life-compare-form-input" },elements);
        // parent[0].appendChild(n);
    };
    const removeHeir = (e) => {};
    const removeHeirs = (e) => {};

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
                        heirs={heirs.current}
                    />
                ))}
                <button className="life-compare-button">ثبت نام</button>
            </form>
        </div>
    );
}

export default InsuranceTargetDetails;
