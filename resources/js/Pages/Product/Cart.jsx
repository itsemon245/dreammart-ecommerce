import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import TableWithCheck from '@/Components/Table/TableWithCheck'
export default function Cart({ categories, auth, carts }) {
  return (
    <DashboardLayout pageTitle="Carts" categories={categories} auth={auth}>

      {/* //TODO design cart items here */}
      <TableWithCheck items={carts} />
    </DashboardLayout>
  )
}
