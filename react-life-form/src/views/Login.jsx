import { Link } from "react-router-dom";
import axiosClient from "../axios-client.js";
import { createRef, useState } from "react";
import { useStateContext } from "../context/ContextProvider.jsx";

export default function Login() {
    const emailRef = createRef();
    const passwordRef = createRef();
    const { setUser, setToken } = useStateContext();
    const [message, setMessage] = useState(null);

    const onSubmit = (ev) => {
        ev.preventDefault();

        const payload = {
            email: emailRef.current.value,
            password: passwordRef.current.value,
        };
        axiosClient
            .post("/login", payload)
            .then(({ data }) => {
                setUser(data.user);
                setToken(data.token);
            })
            .catch((err) => {
                const response = err.response;
                if (response && response.status === 422) {
                    setMessage(response.data.message);
                }
            });
    };

    return (
        <div className="login-signup-form animated fadeInDown">
            <div className="form">
                <form onSubmit={onSubmit}>
                    <h1 className="title">ورود حساب کاربری</h1>

                    {message && (
                        <div className="alert">
                            <p>{message}</p>
                        </div>
                    )}

                    <input ref={emailRef} type="email" placeholder="ایمیل" />
                    <input
                        ref={passwordRef}
                        type="password"
                        placeholder="رمز عبور"
                    />
                    <button className="btn btn-block">ورود</button>
                    <p className="message">
                        حسابی ندارید؟{" "}
                        <Link to="/signup">ساختن حساب کاربری</Link>
                    </p>
                </form>
            </div>
        </div>
    );
}
