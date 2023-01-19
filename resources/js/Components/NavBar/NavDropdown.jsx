import React, { useState } from 'react'
import NavLink from './NavLink'

import { Link } from '@inertiajs/inertia-react';

import './scss/nav.scss';

export default function NavDropdown() {
    const [showDropdown, setShowDropdown] = useState(false)
    return (
        <div className='overflow-visible h-0'>
            <button className='dropdown px-5 py-3 hover:bg-neutral rounded' onClick={() => {
                setShowDropdown(!showDropdown)
            }}>
                Browse
            </button>
            {showDropdown ?
                (
                    <>
                        <ul className='
                mt-2 hidden
                flex-col gap-y-2
                text-start
                dropdown-items'>
                            <Link href={route('home')}
                                className='hover:bg-neutral rounded px-3 py-2
                    dropdown-item
                    '>Featured</Link>

                            <Link href={route('home')}
                                className='hover:bg-neutral rounded px-3 py-2
                    dropdown-item'>Shoes</Link>

                            <Link href={route('home')}
                                className='hover:bg-neutral rounded px-3 py-2
                    dropdown-item'>Watches</Link>

                            <Link href={route('home')}
                                className='hover:bg-neutral rounded px-3 py-2
                    dropdown-item'>All</Link>
                        </ul>
                    </>
                ) : null}
        </div>
    )
}
