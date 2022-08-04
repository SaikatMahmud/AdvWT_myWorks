import Reg from "./Reg";
import BeforeLogin from "./layoutBeforeLogin";
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import AboutUs from "./AboutUs";
import Home from "./Home";
import Login from "./Login";
import ContactUs from "./ContactUs";

const Main = () => {
    return (
        <div>
            <BrowserRouter>
                <BeforeLogin />

                <Routes>
                    <Route path="/registration" element={<Reg />} />
                    <Route path="/" element={<Home />} />

                    <Route path="/login" element={<Login />} />
                    <Route path="/aboutUs" element={<AboutUs />} />
                    <Route path="/contactUs" element={<ContactUs />} />


                </Routes>
            </BrowserRouter>

        </div>
    )
}
export default Main;