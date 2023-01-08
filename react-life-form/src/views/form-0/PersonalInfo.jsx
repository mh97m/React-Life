import React from "react";
import DateObject from "react-date-object";
import persian from "react-date-object/calendars/persian";
import persian_fa from "react-date-object/locales/persian_fa";

function PersonalInfo({ formData, setFormData, formError, setFormError }) {
    const now = new DateObject({
        date: new Date(),
        calendar: persian,
        locale: persian_fa,
    });

    const years = [];
    const months = [];
    const days = [];
    for (let i = now.year; i > now.year - 66; i--) {
        years.push(i);
    }
    for (let i = 12; i > 0; i--) {
        months.push(i);
    }
    for (let i = formData["birth_month"] > 6 ? 30 : 31; i > 0; i--) {
        days.push(i);
    }

    const handleChange = (e) => {
        setFormData({ ...formData, [e.target.name]: e.target.value });
        setFormError({ ...formError, birth_year: "" });
    };
    const handleInsuranceTarget = (e) => {
        handleChange(e);
        if (e.target.value == "خودم") {
            if (now.year - formData["birth_year"] < 18) {
                setFormData({ ...formData, birth_year: "" });
                setFormError({
                    ...formError,
                    birth_year: "سن شما کمتر از 18 سال است.",
                });
            } else if (now.year - formData["birth_year"] == 18) {
                if (formData["birth_month"] > now.month) {
                    setFormData({ ...formData, birth_year: "" });
                } else if (
                    formData["birth_month"] == now.month &&
                    formData["birth_day"] > now.day
                ) {
                    setFormData({ ...formData, birth_year: "" });
                }
            }
        }
    };

    const handleBirthYear = (e) => {
        handleChange(e);
        if (now.year - e.target.value > 64) {
            setFormData({ ...formData, birth_year: "" });
        } else if (now.year - e.target.value == 64) {
            if (formData["birth_month"] > now.month + 1) {
                setFormData({ ...formData, birth_year: "" });
            } else if (
                formData["birth_month"] == now.month &&
                formData["birth_day"] > now.day
            ) {
                setFormData({ ...formData, birth_year: "" });
            }
        } else if (now.year - e.target.value < 18) {
            if (formData["insurance_target"] == "خودم") {
                setFormData({ ...formData, birth_year: "" });
            }
        } else if (now.year - e.target.value == 18) {
            if (formData["insurance_target"] == "خودم") {
                if (formData["birth_month"] > now.month) {
                    setFormData({ ...formData, birth_year: "" });
                } else if (
                    formData["birth_month"] == now.month &&
                    formData["birth_day"] > now.day
                ) {
                    setFormData({ ...formData, birth_year: "" });
                }
            }
        }
    };
    const handleBirthMonth = (e) => {
        handleChange(e);
        if (now.year - formData["birth_year"] > 64) {
            setFormData({ ...formData, birth_year: "" });
        } else if (now.year - formData["birth_year"] == 64) {
            if (e.target.value > now.month + 1) {
                setFormData({ ...formData, birth_year: "" });
            } else if (
                e.target.value == now.month + 1 &&
                formData["birth_day"] > now.day
            ) {
                setFormData({ ...formData, birth_year: "" });
            }
        }
    };
    const handleBirthDay = (e) => {
        handleChange(e);
        if (now.year - formData["birth_year"] > 64) {
            setFormData({ ...formData, birth_year: "" });
        } else if (now.year - formData["birth_year"] == 64) {
            if (formData["birth_month"] > now.month + 1) {
                setFormData({ ...formData, birth_year: "" });
            } else if (
                formData["birth_month"] == now.month + 1 &&
                e.target.value > now.day
            ) {
                setFormData({ ...formData, birth_year: "" });
            }
        }
    };

    return (
        <div className="personal-info-container">
            <select
                name="insurance_target"
                value={formData.insurance_target}
                onChange={handleInsuranceTarget}
                className="insurance-target"
            >
                <option value="">نسبت</option>
                <option value="خودم">خودم</option>
                <option value="همسر">همسر</option>
                <option value="فرزند">فرزند</option>
                <option value="پدر">پدر</option>
                <option value="مادر">مادر</option>
                <option value="خواهر">خواهر</option>
                <option value="برادر">برادر</option>
            </select>
            <div className="birth">
                <select
                    name="birth_year"
                    value={formData.birth_year}
                    onChange={handleBirthYear}
                    className="birth-year"
                >
                    <option value="">سال تولد</option>
                    {years.map((opt, index) => {
                        return (
                            <option value={opt} key={index}>
                                {opt}
                            </option>
                        );
                    })}
                </select>
                <select
                    name="birth_month"
                    value={formData.birth_month}
                    onChange={handleBirthMonth}
                    className="birth-month"
                >
                    <option value="">ماه تولد</option>
                    {months.map((opt, index) => {
                        return (
                            <option value={opt} key={index}>
                                {opt}
                            </option>
                        );
                    })}
                </select>
                <select
                    name="birth_day"
                    value={formData.birth_day}
                    onChange={handleBirthDay}
                    className="birth-day"
                >
                    <option value="">روز تولد</option>
                    {days.map((opt, index) => {
                        return (
                            <option value={opt} key={index}>
                                {opt}
                            </option>
                        );
                    })}
                </select>
            </div>
            <span className="error">{formError["birth_year"]}</span>
        </div>
    );
}

export default PersonalInfo;
