import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'

export default function Cart({ categories, auth }) {
  return (
    <DashboardLayout pageTitle="Orders" categories={categories} auth={auth}>

      {/* //TODO design order items here */}
      <div className="">

      </div>
    </DashboardLayout>
  )
}
