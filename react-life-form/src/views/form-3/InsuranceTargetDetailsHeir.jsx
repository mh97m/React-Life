import { useState } from "react";
import InsuranceTargetDetailsItem from "./InsuranceTargetDetailsItem";
import "./insuranceTargetDetailsItem.css";

const InsuranceTargetDetailsHeir = (count) => {
    const [values, setValues] = useState({
        national_code: "",
        heir_target: "",
        heir_share: "",
    });
    const [errors, setErrors] = useState({
        national_code: "",
        heir_target: "",
    });
    const [disableds, setDisableds] = useState({
        birth: true,
    });

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
            type: "select",
            label: "نسبت",
            name: "heir_target",
            errorMessage: ". نسبت وارث را وارد کنید!!",
            required: true,
            options: ["خودم", "همسر", "فرزند", "پدر", "مادر", "خواهر", "برادر"],
        },
        {
            id: 3,
            type: "text",
            label: "درصد سهم",
            name: "heir_share",
            placeholder: "10 %",
            errorMessage: ". درصد سهم را وارد کنید!!",
            required: true,
        },
    ];

    const onChange = (e) => {
        setValues({ ...values, [e.target.name]: e.target.value });
        setErrors({ ...errors, [e.target.name]: "" });
        handleChange(e);
    };

    const elements = [];
    console.log(count);
    for (let i = 0; i < count; i++) {
        console.log('first')
        inputs.map((input) => {
            elements.push(
                <InsuranceTargetDetailsItem
                    key={input.id}
                    {...input}
                    value={values[input.name]}
                    error={errors[input.name]}
                    disabled={disableds[input.name]}
                    onChange={onChange}
                    onClick={input.name == "user_if_dead" && onClickHeir}
                />
            );
            console.log(input);
        });
    }

    console.log(elements);
    return (
        <>
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
        </>
    );
};

export default InsuranceTargetDetailsHeir;
