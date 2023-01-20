import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import NavBar from '/resources/js/Components/NavBar/NavBar';

export default function Exclusive() {
    return (
        <>
            <Head>
                <meta name="description" content="this is exclusive page of dream mart" />
                <title>Exclusive</title>
            </Head>
            <div className='w-100' >
                <NavBar></NavBar>
            </div>

        </>
    )
}
