import axios from "axios";
import { useState } from "react";
const Dept=()=>{
    const[dept,setPost]=useState({});
    const LoadDept=()=>{
        axios.get("https://mocki.io/v1/72353acd-8db8-4293-9df4-2e6c22920b55").
        then((resp)=>{
            setPost(resp.data);
        },(err)=>{
            debugger;
        });
    }

    return (
        <div>
            <p>Dept name: {dept.Name}</p>
            <h4>Dept ID: {dept.Id}</h4>
            <button onClick={LoadDept}>Load Department Info</button>
        </div>
    )
}
export default Dept;