import React, { useState } from 'react';
import { BrowserRouter as Router, Route, Routes, Link } from "react-router-dom";
// import reactLogo from "./assets/react.svg";
import { FormContext } from "./Contexts/FormContext";
import MultiStepForm from "./components/0/MultiStepForm";
import LifeCompare from "./components/1/LifeCompare";
import ErrorPage from "./components/ErrorPage";

function App() {
    return (
        <FormContext.Provider value="">
            <Router>
                <nav className="life-compare-nav">
                    <Link to="/" className="life-compare-button">
                        صفحه اول
                    </Link>
                    <Link to="/life-compare" className="life-compare-button">
                        صفحه دوم
                    </Link>
                </nav>
                <Routes>
                    <Route path="/" element={<MultiStepForm />} />
                    <Route path="/life-compare" element={<LifeCompare />} />
                    <Route path='*' element={<ErrorPage/>} />
                </Routes>
            </Router>
        </FormContext.Provider>
    );
}

export default App;
