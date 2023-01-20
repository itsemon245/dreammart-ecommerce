import React, { useState } from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import { NavBar, Hero, Section } from '../Components/';
import { UserIcon } from '@heroicons/react/24/outline'


export default function App() {


    return (
        <>
            <Head>
                <title>Home</title>
                <meta name="description" content="This is a e-commerce web application for 8th semester final project" />
            </Head>
            <div className='w-100' >
                <NavBar></NavBar>
                <Hero className=""></Hero>
                <Section></Section>
            </div>
        </>
    );
}
