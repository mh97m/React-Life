import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../context/ContextProvider";

export default function GuestLayout() {
    const { user, token, notification, next, setNext } = useStateContext();

    if (token) {
        if (next) {
            return <Navigate to={next} />;
        } else {
            return <Navigate to="/" />;
        }
        // navigate(-1);
    }

    return (
        <div id="guestLayout">
            <Outlet />
            {notification && <div className="notification">{notification}</div>}
        </div>
    );
}
