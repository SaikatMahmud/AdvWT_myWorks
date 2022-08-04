import { useState } from "react";
import axios from "axios";

const Reg=()=>{
    const [email,setEmail] = useState("");
    const [password,setPassword] = useState("");
    const [errs,setErrs] = useState({});
    const [msg,setMsg] = useState("");
    const handleSubmit=(event)=>{
        event.preventDefault();
        const data={email:email,password:password};
        axios.post("http://localhost:8000/api/login",data).
        then((succ)=>{
            //setMsg(succ.data.msg);
            //window.location.href="/list";
            debugger;
        },(err)=>{
           debugger;
            setErrs(err.response.data);
        })
    }
    return(
        <form onSubmit={handleSubmit}>
            <h1>{msg}</h1>
            Email: <input value={email} onChange={(e)=>{setEmail(e.target.value)}} type="text"/><span>{errs.email? errs.email[0]:''}</span><br/>
            Password: <input value={password} onChange={(e)=>{setPassword(e.target.value)}} type="text"/><span>{errs.password? errs.password[0]:''}</span><br/>
            <input type="submit" value="Login"/> 
        </form>
    )
}
export default Reg;