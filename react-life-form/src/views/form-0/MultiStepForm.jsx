import React, { useState } from "react";
import PersonalInfo from "./PersonalInfo";
import JobInfo from "./JobInfo";
import InsuranceInfo from "./InsuranceInfo";
import axios from "axios";
import Cookies from "universal-cookie";
import "./multiStepForm.css";

function MultiStepForm() {
    const [page, setPage] = useState(0);
    const [formData, setFormData] = useState({
        insurance_target: "",
        birth_year: "",
        birth_month: "",
        birth_day: "",
        job: "",
        job_id: "",
        life_ins_duration: "",
        payment_method: "",
        annual_payment: "",
    });
    const [formError, setFormError] = useState({
        insurance_target: "",
        birth_year: "",
        birth_month: "",
        birth_day: "",
        job: "",
        job_id: "",
        life_ins_duration: "",
        payment_method: "",
        annual_payment: "",
    });

    const FormTitles = ["اطلاعات شخصی", "شغل", "اطلاعات تکمیلی"];

    const PageDisplay = () => {
        if (page === 0) {
            return (
                <PersonalInfo
                    formData={formData}
                    setFormData={setFormData}
                    formError={formError}
                    setFormError={setFormError}
                />
            );
        } else if (page === 1) {
            return <JobInfo formData={formData} setFormData={setFormData} />;
        } else {
            return (
                <InsuranceInfo formData={formData} setFormData={setFormData} />
            );
        }
    };

    const fetchData = async () => {
        await axios
            .post("/lifeCompare", formData)
            .then(function (response) {
                console.log(response, true);
                // if (response.data.redirect == '/') {
                //   window.location = "/index"
                // } else if (response.data.redirect == '/login') {
                //   window.location = "/login"
                // }
            })
            .catch(function (error) {
                window.location = "/lifeCompare";
                console.log(error, false);
            });
    };

    const handleSubmit = () => {
        if (
            formData["insurance_target"] &&
            formData["birth_year"] &&
            formData["birth_month"] &&
            formData["birth_day"] &&
            formData["job_id"] &&
            formData["life_ins_duration"] &&
            formData["payment_method"] &&
            formData["annual_payment"]
        ) {
            formData["annual_payment"] = formData["annual_payment"].replace(
                /,/g,
                ""
            );
            if (formData["payment_method"] == 12) {
                if (formData["annual_payment"] >= 6000000) {
                    alert("FORM SUBMITTED");
                    // console.log(formData);
                    // fetchData();
                    const cookies = new Cookies();
                    cookies.set("formData", formData, { path: "/life-compare" });
                    window.location = "/life-compare";
                    // console.log(cookies.get('formData'));
                }
            } else {
                if (formData["annual_payment"] >= 4000000) {
                    alert("FORM SUBMITTED");
                    const cookies = new Cookies();
                    cookies.set("formData", formData, { path: "/life-compare" });
                    window.location = "/life-compare";
                    // console.log(formData);
                    // fetchData();
                }
            }
        }
    };

    const handleNext = () => {
        if (page == 0) {
            if (
                formData["insurance_target"] &&
                formData["birth_year"] &&
                formData["birth_month"] &&
                formData["birth_day"]
            ) {
                setPage((page) => page + 1);
            }
        } else if (page == 1) {
            if (formData["job_id"]) {
                setPage((page) => page + 1);
            }
        }
    };

    return (
        <div className="MultiStepForm">
            <div className="step-form">
                <div className="progressbar">
                    <div
                        style={{
                            width:
                                page === 0
                                    ? "33.3%"
                                    : page == 1
                                    ? "66.6%"
                                    : "100%",
                        }}
                    ></div>
                </div>
                <div className="form-container">
                    <div className="header">
                        <h1>{FormTitles[page]}</h1>
                    </div>
                    <div className="body">{PageDisplay()}</div>
                    <div className="footer">
                        <button
                            disabled={page == 0}
                            style={{ display: page === 0 ? "none" : "block" }}
                            onClick={() => {
                                setPage((currPage) => currPage - 1);
                            }}
                        >
                            قبلی
                        </button>
                        <button
                            onClick={() => {
                                if (page === FormTitles.length - 1) {
                                    handleSubmit();
                                } else {
                                    handleNext();
                                }
                            }}
                        >
                            {page === FormTitles.length - 1
                                ? "ثبت اطلاعات"
                                : "بعدی"}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default MultiStepForm;
