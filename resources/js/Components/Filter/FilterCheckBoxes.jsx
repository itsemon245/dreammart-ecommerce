import React from 'react'
import CheckBox from './CheckBox'
export default function FilterCheckBoxes({ topic, names }) {
    return (
        <div className='ml-8 mt-8'>
            <h3 className='text-primary font-medium'>{topic}</h3>
            <ul className='flex flex-col gap-1 ml-5 mt-2.5'>
                {names.map((name, i) => (
                    <li key={i}><CheckBox name={name} /> </li>
                ))}
            </ul>
        </div>
    )
}
