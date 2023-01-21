import { useState, useEffect, useRef } from "react";
import { useNavigate, useParams } from "react-router-dom";
import Cookies from "universal-cookie";
import DateObject from "react-date-object";
import persian from "react-date-object/calendars/persian";
import persian_fa from "react-date-object/locales/persian_fa";
import { useStateContext } from "../../context/ContextProvider.jsx";
import axiosClient from "../../axios-client.js";
import InsuranceTargetDetailsItem from "./InsuranceTargetDetailsItem";
import "./insuranceTargetDetails.css";

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
        national_code: "",
        user_if_dead: "",
    });
    const [errors, setErrors] = useState({
        national_code: "",
        user_if_dead: "",
    });
    const [disableds, setDisableds] = useState({
        birth: true,
    });
    const heirs = useRef(1);

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
                key: null,
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

    const [heir, setHeir] = useState([
        {
            id: inputs.length + 1,
            type: "input",
            label: "مبلغ پرداختی قسط اول",
            name: "divided_payment",
        }
    ]);

    const handleSubmit = (e) => {
        e.preventDefault();
        setServerErrors(null);
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
        if (e.target.value == null) {
            heirs.current = 1;
            handleHeirs();
        } else {
            heirs.current = 0;
            handleHeirs();
        }
    };

    const addHeir = (e) => {
        parent = document.getElementsByName("user_if_dead");
        
        document.createElement();
    };

    const removeHeir = (e) => {};

    const removeHeirs = (e) => {};

    const handleHeirs = () => {
        console.log(heirs);
        // const parent = document.getElementsByName("heirs");
        // console.log(parent)
        // const heir = {
        //     id: 10,
        //     type: "input",
        //     label: "مبلغ پرداختی قسط اول",
        //     name: "divided_payment",
        //     readOnly: true,
        // };
        // let div = document.createElement("div");
        // for (let index = 0; index < heirs.current; index++) {
        // referenceNode.parentNode.insertBefore(
        //     newNode,
        //     referenceNode.nextSibling
        // );
        // parent.after(div);
        // console.log(parent);
        // }

        // console.log(inputs.length);
    };

    const onClickHeir = (e) => {
        if (e.target.className == "heir-add-button") {
            heirs.current = heirs.current + 1;
            handleHeirs();
        } else {
            heirs.current = heirs.current - 1;
            handleHeirs();
        }
        // inputs.current.push({
        //     id: inputs.current.length+1,
        //     type: "input",
        //     label: "مبلغ پرداختی قسط اول",
        //     name: "divided_payment",
        //     readOnly: true,
        // });
        // console.log(inputs);
        // ('<p>aaaaaaaaaaaaa</p>').appendTo('div#heirs');
        // console.log(
        //     [...Array(heirs.current).keys()].map((i) => i),
        //     new Array(heirs.current).fill(0)
        // )
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
                    />
                ))}
                <button className="life-compare-button">ثبت نام</button>
            </form>
        </div>
    );
}

export default InsuranceTargetDetails;
