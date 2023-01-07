import React from "react";
import DateObject from "react-date-object";
import persian from "react-date-object/calendars/persian";
import persian_fa from "react-date-object/locales/persian_fa";

function InsuranceInfo({ formData, setFormData }) {
    const now = new DateObject({
        date: new Date(),
        calendar: persian,
        locale: persian_fa,
    });
    const durations = [];
    if (now.year - parseInt(formData["birth_year"]) >= 59) {
        for (
            let i = 0;
            i < 65 - now.year + parseInt(formData["birth_year"]) + 1;
            i++
        ) {
            durations.push(i + 5);
        }
    } else {
        for (
            let i = 0;
            i < 64 - now.year + parseInt(formData["birth_year"]) + 11 && i < 26;
            i++
        ) {
            durations.push(i + 5);
        }
    }

    const handleChange = (e) => {
        setFormData({ ...formData, [e.target.name]: e.target.value });
    };

    const handleannualPayment = (e) => {
        setFormData({
            ...formData,
            [e.target.name]: parseInt(e.target.value.replace(/,/g, ""))
                ? parseInt(e.target.value.replace(/,/g, "")).toLocaleString()
                : 0,
        });
    };

    return (
        <div className="insurance-info-container">
            <select
                name="life_ins_duration"
                value={formData.life_ins_duration}
                onChange={(e) => {
                    setFormData({
                        ...formData,
                        life_ins_duration: e.target.value,
                    });
                }}
                className="life-ins-duration"
            >
                <option value="">مدت بیمه نامه</option>
                {durations.map((opt, index) => {
                    return (
                        <option value={opt} key={index}>
                            {opt}
                        </option>
                    );
                })}
            </select>
            <select
                name="payment_method"
                value={formData.payment_method}
                onChange={(e) => {
                    setFormData({
                        ...formData,
                        payment_method: e.target.value,
                    });
                }}
                className="payment-method"
            >
                <option value="">نحوه پرداخت</option>
                <option value="1">۱ قسط سالانه</option>
                <option value="2">۲ قسط شش ماهه</option>
                <option value="4">۴ قسط سه ماهه</option>
                <option value="12">۱۲ قسط ماهانه</option>
            </select>
            <input
                type="text"
                name="annual_payment"
                placeholder="مبلغ پرداختی سال اول (ریال)"
                value={formData.annual_payment}
                onChange={handleannualPayment}
                className="annual-payment"
            />
        </div>
    );
}

export default InsuranceInfo;
