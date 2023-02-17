import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import TableWithCheck from '@/Components/Table/TableWithCheck'
import Checkout from '@/Components/Cart/Checkout'
export default function Cart({ categories, auth, carts }) {

  return (
    <DashboardLayout pageTitle="Carts" categories={categories} auth={auth}>


      <TableWithCheck userId={auth.user.id} items={carts} />
      {carts.length !== 0 && <Checkout userId={auth.user.id} items={carts}></Checkout>}
    </DashboardLayout>
  )
}
