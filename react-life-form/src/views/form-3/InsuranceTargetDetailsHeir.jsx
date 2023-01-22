import { useState } from "react";
import InsuranceTargetDetailsItem from "./InsuranceTargetDetailsItem";
import "./insuranceTargetDetailsItem.css";

const InsuranceTargetDetailsHeir = (props) => {
    const {
        values,
        errors,
        disableds,
        time,
        inputLength,
    } = props;

    const inputs = [];
    for (let i = 1; i < time + 1; i++) {
        inputs.push(
            {
                id: inputLength + i * 3 + 1 ,
                type: "text",
                label: "کد ملی",
                name: `national_codes[${i}]`,
                placeholder: "1234567890",
                errorMessage: ". کد ملی خود را وارد کنید!!",
                required: true,
            },
            {
                id: inputLength + i * 3 + 2 ,
                type: "select",
                label: "نسبت",
                name: `heir_targets[${i}]`,
                errorMessage: ". نسبت وارث را وارد کنید!!",
                required: true,
                options: [
                    "خودم",
                    "همسر",
                    "فرزند",
                    "پدر",
                    "مادر",
                    "خواهر",
                    "برادر",
                ],
            },
            {
                id: inputLength + i * 3 + 3 ,
                type: "text",
                label: "درصد سهم",
                name: `heir_shares[${i}]`,
                placeholder: "10 %",
                errorMessage: ". درصد سهم را وارد کنید!!",
                required: true,
            }
        );
    }

    const onChange = (e) => {
        // setValues({ ...values, [e.target.name]: e.target.value });
        // setErrors({ ...errors, [e.target.name]: "" });
        handleChange(e);
    };

    const handleChange = (e) => {
        if ((new RegExp("national_codes").test(e.target.name))) {
            handleNationalCode(e);
        }else if ((new RegExp("heir_targets").test(e.target.name))) {
            handleHeirTargets(e);
        }else if ((new RegExp("heir_shares").test(e.target.name))) {
            handleHeirShares(e);
        }
    };

    const handleNationalCode = (e) => {
        values.national_codes[e.target.name[e.target.name.length - 2]] = e.target.value;
    };

    const handleHeirTargets = (e) => {
        values.heir_targets[e.target.name[e.target.name.length - 2]] = e.target.value;
    };

    const handleHeirShares = (e) => {
        values.heir_shares[e.target.name[e.target.name.length - 2]] = e.target.value;
    };

    const elements = [];
    // for (let i = 0; i < count; i++) {
    //     console.log('first')
    //     inputs.map((input) => {
    //         elements.push(
    //             <InsuranceTargetDetailsItem
    //                 key={input.id}
    //                 {...input}
    //                 value={values[input.name]}
    //                 error={errors[input.name]}
    //                 disabled={disableds[input.name]}
    //                 onChange={onChange}
    //                 onClick={input.name == "user_if_dead" && onClickHeir}
    //             />
    //         );
    //         console.log(input);
    //     });
    // }

    // console.log(elements);
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
