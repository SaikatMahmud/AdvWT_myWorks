import axios from "axios";
import { useState } from "react";
const Stud=()=>{
    const[stud,setPost]=useState({});
    const LoadStud=()=>{
        axios.get("https://mocki.io/v1/72353acd-8db8-4293-9df4-2e6c22920b55").
        then((response)=>{
           // debugger;
            setPost(response.data.Students[0]);
        },(error)=>{
            debugger;
        });
    }
    return (
        <div>
            <p>Student ID: {stud.Id}</p>
            <p>Student name: {stud.Name}</p>
            <p>CGPA: {stud.Cgpa}</p>
            <p>DOB: {stud.Dob}</p>
            <button onClick={LoadStud}>Load Student Info</button>
        </div>
    )
}
export default Stud;