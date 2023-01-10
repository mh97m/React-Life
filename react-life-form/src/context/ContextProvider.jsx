import { createContext, useContext, useState } from "react";

const StateContext = createContext({
    currentUser: null,
    token: null,
    notification: null,
    next: null,
    insurancedId: null,
    setUser: () => {},
    setToken: () => {},
    setNotification: () => {},
    setNext: () => {},
    setInsurancedId: () => {},
});

export const ContextProvider = ({ children }) => {
    const [user, setUser] = useState({});
    const [token, _setToken] = useState(localStorage.getItem("ACCESS_TOKEN"));
    const [notification, _setNotification] = useState("");
    const [next, _setNext] = useState(localStorage.getItem("NEXT"));
    const [insurancedId, _setInsurancedId] = useState(
        localStorage.getItem("INSURANCED_ID")
    );

    const setToken = (token) => {
        _setToken(token);
        if (token) {
            localStorage.setItem("ACCESS_TOKEN", token);
        } else {
            localStorage.removeItem("ACCESS_TOKEN");
        }
    };

    const setNotification = (message) => {
        _setNotification(message);

        setTimeout(() => {
            _setNotification("");
        }, 5000);
    };

    const setInsurancedId = (insurancedId) => {
        _setInsurancedId(insurancedId);
        if (insurancedId) {
            localStorage.setItem("INSURANCED_ID", insurancedId);
        } else {
            localStorage.removeItem("INSURANCED_ID");
        }
    };

    const setNext = (next) => {
        _setNext(next);
        if (next) {
            localStorage.setItem("NEXT", next);
        } else {
            localStorage.removeItem("NEXT");
        }
    };

    return (
        <StateContext.Provider
            value={{
                user,
                setUser,
                token,
                next,
                insurancedId,
                setToken,
                notification,
                setNotification,
                setNext,
                setInsurancedId,
            }}
        >
            {children}
        </StateContext.Provider>
    );
};

export const useStateContext = () => useContext(StateContext);
