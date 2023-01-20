import React from 'react'
import NavLink from '/resources/js/Components/NavLink'

export default function CategoriesDD({route, content}) {
    return (
        <div>
            
            <ul className='
                mt-2 peer-[:focus-within]:flex peer-[:focus-within]:flex-col
                flex-col gap-y-2
                text-start
                dropdown-items'>
                {route.map((route, id)=><NavLink key={id} href={route.sub} content={route.name} />)}
            </ul>
        </div>
    )
}
