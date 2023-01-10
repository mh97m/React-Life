import { createContext, useContext, useState } from "react";

const StateContext = createContext({
    currentUser: null,
    token: null,
    notification: null,
    next: null,
    setUser: () => {},
    setToken: () => {},
    setNotification: () => {},
    setNext: () => {},
});

export const ContextProvider = ({ children }) => {
    const [user, setUser] = useState({});
    const [token, _setToken] = useState(localStorage.getItem("ACCESS_TOKEN"));
    const [notification, _setNotification] = useState("");
    const [next, _setNext] = useState(localStorage.getItem("NEXT"));

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
                setToken,
                notification,
                setNotification,
                setNext,
            }}
        >
            {children}
        </StateContext.Provider>
    );
};

export const useStateContext = () => useContext(StateContext);
