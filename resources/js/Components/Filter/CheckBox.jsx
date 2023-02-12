import React from 'react'
import { useState } from 'react'

export default function CheckBox({ name}) {
    const [checked, setChecked] = useState(false)

    const onClickHandler = () =>{
        const toggle = !checked;
        setChecked(toggle);
    }
    const onChangeHandler = () =>{
        console.log('checkbox toggled')
    }
    return (
        <div className='flex items-center'>
            <input onClick={onClickHandler} onChange={onClickHandler} className={`checkbox checkbox-sm checkbox-primary rounded bg-base-200 transition-all mr-3`} type="checkbox" checked={checked ? 'checked': ''} name={''} id={''} />
            <label htmlFor={name}>{name}</label>
        </div>
    )
}
