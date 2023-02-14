import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
export default function Index({ categories, auth }) {
    return (
        <DashboardLayout pageTitle="Profile" categories={categories} auth={auth}>

        </DashboardLayout>
    )
}
