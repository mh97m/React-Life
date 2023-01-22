import { useState } from "react";
import "./insuranceTargetDetailsItem.css";

const InsuranceTargetDetailsItem = (props) => {
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
        heirsElement,
        heirs,
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
                        disabled={typeof disabled == "boolean" && disabled}
                    >
                        <option value={defaultValue ? defaultValue.key : ""}>
                            {defaultValue ? defaultValue.value : label}
                        </option>
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
                    {(inputProps.name == "user_if_dead" && inputProps.value == 0) && (
                        <div>
                            {heirs < 4 && (<button className="heir-add-button" type="button" onClick={onClick}>اضافه کردن وارث</button>)}
                            {heirs > 1 &&  (<button className="heir-remove-button" type="button" onClick={onClick}>حذف وارث</button>)}
                            <div className="heirs">
                            </div>
                        </div>
                    )}
                    {(inputProps.name == "user_if_dead" && inputProps.value == 0) && (heirsElement)}
                </div>
            );
            break;
        default:
            return (
                <div className="life-compare-form-input">
                    <label className="life-compare-label">{label}</label>
                    <input
                        {...inputProps}
                        className={
                            error
                                ? "life-compare-input-error"
                                : "life-compare-input"
                        }
                        onChange={onChange}
                        onBlur={handleFocus}
                        focused={focused.toString()}
                        type={type}
                        disabled={typeof disabled == "boolean" && disabled}
                    />
                    <span className="life-compare-span">{errorMessage}</span>
                    <span className="life-compare-span-error">{error}</span>
                </div>
            );
            break;
    }
};

export default InsuranceTargetDetailsItem;
