import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import { NavLink, NavDropdown } from '../Components';
import route from '/vendor/tightenco/ziggy/src/js';
import SearchBox from '../Components/SearchBox/SearchBox';
import { UserIcon } from '@heroicons/react/24/outline'


export default function App() {
    return (
        <>
            <Head>
                <title>Laravel + React</title>
                <meta name="description" content="This is a e-commerce web application for 8th semester final project" />
            </Head>
            <div className='w-100' >
                <nav className='flex gap-x-4 items-start'>
                    <NavLink className="app-logo" href={route('home')}>
                        <img src="/assets/logo.svg" alt="app-logo" />
                    </NavLink>
                    <div className='mx-auto flex gap-x-10'>
                        <NavLink active={true} href={route('home')} >
                            Home
                        </NavLink>
                        <NavDropdown />
                        <NavLink href={route('dashboard')} >
                            Explore
                        </NavLink>

                        <NavLink href={route('dashboard')} >
                            Contact Us
                        </NavLink>
                    </div>
                    <SearchBox />
                    <div className='ml-auto flex gap-4'>


                        <button href="" className='ds-btn ds-btn-outline ds-btn-primary font-medium hover:text-white '>Login</button>
                        <button href="" className='ds-btn ds-btn-primary text-white font-medium'>Register</button>
                        {/* <UserIcon className='h-6 w-6'></UserIcon> */}
                    </div>

                </nav>
                {/* <article className="ds-prose">
                    <h1>Garlic bread with cheese: What the science tells us</h1>
                    <p>For years parents have espoused the health benefits of eating garlic bread with cheese to their children, with the food earning such an iconic status in our culture that kids will often dress up as warm, cheesy loaf for Halloween.</p>
                    <p>But a recent study shows that the celebrated appetizer may be linked to a series of rabies cases springing up around the country.</p>
                </article>
                <button className="ds-btn ds-btn-primary text-lime-50">Hello</button> */}
            </div>
        </>
    );
}
