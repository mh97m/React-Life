import { useState } from "react";
import "./formInput.css";

const FormInput = (props) => {
    const {
        label,
        errorMessage,
        onChange,
        onClick,
        id,
        type,
        options,
        error,
        defaultValue,
        disabled,
        ...inputProps
    } = props;
    const [focused, setFocused] = useState(false);

    const handleFocus = (e) => {
        setFocused(true);
    };

    switch (type) {
        case "select":
            return (
                <div className="life-compare-form-select">
                    <label className="life-compare-label">{label}</label>
                    <select
                        {...inputProps}
                        className={
                            error
                                ? "life-compare-select-error"
                                : "life-compare-select"
                        }
                        onChange={onChange}
                        onBlur={handleFocus}
                        focused={focused.toString()}
                        disabled={(typeof disabled == "boolean") && disabled}
                    >
                        <option value="">{defaultValue ? defaultValue : label}</option>
                        {options.map((opt, index) => {
                            return typeof opt !== "object" ? (
                                <option key={index} value={opt}>
                                    {opt}
                                </option>
                            ) : (
                                <option key={index} value={opt["key"]}>
                                    {opt["value"]}
                                </option>
                            );
                        })}
                    </select>
                    <span className="life-compare-span">{errorMessage}</span>
                    <span className="life-compare-span-error">{error}</span>
                </div>
            );
            break;
        default:
            return (
                <div className="life-compare-form-input">
                    <label className="life-compare-label">{label}</label>
                    <input
                        {...inputProps}
                        className="life-compare-input"
                        onChange={onChange}
                        onBlur={handleFocus}
                        onFocus={() =>
                            inputProps.name === "confirmPassword" &&
                            setFocused(true)
                        }
                        focused={focused.toString()}
                        type={type}
                    />
                    <span className="life-compare-span">{errorMessage}</span>
                    <span className="life-compare-span-error">{error}</span>
                    {inputProps.name == "first_job_level" ? (
                        <ul>
                            {options?.map((item, index) => {
                                if (index < 5) {
                                    return (
                                        <li
                                            key={index}
                                            className="ui-menu-item"
                                            onClick={onClick}
                                            value={item.Id}
                                        >
                                            {item.caption}
                                        </li>
                                    );
                                }
                            })}
                        </ul>
                    ) : null}
                </div>
            );
            break;
    }
};

export default FormInput;
