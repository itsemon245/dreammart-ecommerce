import React from 'react'
import { useState } from 'react'
import CheckBox from './CheckBox'
export default function FilterCheckBoxes({ name, topics }) {
    return (
        <div className='ml-8 mt-8'>
            <h3 className='text-primary font-medium'>{name}</h3>
            <ul className='flex flex-col gap-1 ml-5 mt-2.5'>
                {topics.map((category, i) => (
                    <li key={i}><CheckBox name={category.name} /> </li>
                ))}
            </ul>
        </div>
    )
}
