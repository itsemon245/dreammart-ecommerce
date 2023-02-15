import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import CommonLayout from '@/Layouts/CommonLayout';

export default function AboutUs({ auth, categories }) {
    return (
        <CommonLayout categories={categories} pageTitle="About" auth={auth}>
    <h1 className="text-center text-primary font-semibold text-xl mt-5">
        About Us
    </h1>
        </CommonLayout>
    )
}
