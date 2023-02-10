import React from 'react'
import { useState } from 'react'

export default function CheckBox({ name}) {
    let nameVarient = name.split(" ").join("_").toLowerCase()
    const [checked, setChecked] = useState(false)

    const onClickHandler = () =>{
        const toggle = !checked;
        setChecked(toggle);
    }
    return (
        <div className='flex items-center'>
            <input onClick={onClickHandler} className={`checkbox checkbox-sm checkbox-primary rounded bg-base-200 transition-all mr-3`} type="checkbox" checked={checked ? 'checked': ''} name={nameVarient} id={nameVarient} />
            <label htmlFor={name}>{name}</label>
        </div>
    )
}
