import React from 'react'
import NavLink from './NavLink'
import './scss/nav.scss';

export default function NavDropdown() {
    return (
        <div className='d-inline-flex'>
            <button className='d-inline-flex dropdown'>
                Browse
                <ul className='
                        d-flex
                        flex-column
                        m-0 p-0
                        dropdown-items'>
                    <NavLink href={route('home')} 
                    className='
                    dropdown-item 
                    m-0 '>Featured</NavLink>
                    <NavLink href={route('home')} 
                    className='
                    dropdown-item 
                    m-0 '>Shoes</NavLink>
                    <NavLink href={route('home')} 
                    className='
                    dropdown-item 
                    m-0 '>Watches</NavLink>
                    <NavLink href={route('home')} 
                    className='
                    dropdown-item 
                    m-0 '>All</NavLink>
                </ul>
            </button>
        </div>
    )
}
