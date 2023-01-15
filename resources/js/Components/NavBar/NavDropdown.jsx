import React from 'react'
import NavLink from './NavLink'
import './scss/nav.scss';

export default function NavDropdown() {
    return (
        <div className=''>
            <button className=' text-center dropdown'>
                Browse
                <ul className='
                mt-4 flex flex-col gap-10
                p-0 mb-0 text-start
                        dropdown-items'>

                    <li>
                        <NavLink href={route('home')}
                            className='
                    dropdown-item'>Featured</NavLink>
                    </li>
                    <li>
                        <NavLink href={route('home')}
                            className='
                    dropdown-item'>Shoes</NavLink>
                    </li>
                    <li>
                        <NavLink href={route('home')}
                            className='
                    dropdown-item'>Watches</NavLink>
                    </li>
                    <li>
                        <NavLink href={route('home')}
                            className='
                    dropdown-item'>All</NavLink>
                    </li>
                </ul>
            </button>
        </div>
    )
}
