import React from 'react'

export default function CheckBox({ name }) {
    let nameVarient = name.split(" ").join("_").toLowerCase()
    return (
        <div className='flex items-center'>
            <input className='checkbox checkbox-sm checkbox-primary rounded bg-base-200 transition-all mr-3' type="checkbox" name={nameVarient} id={nameVarient} />
            <label htmlFor={name}>{name}</label>
        </div>
    )
}
