import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../context/ContextProvider";

export default function GuestLayout() {
    const { user, token, notification } = useStateContext();

    if (token) {
        return <Navigate to="/" />;
    }

    return (
        <div id="guestLayout">
            <Outlet />
            {notification && <div className="notification">{notification}</div>}
        </div>
    );
}
