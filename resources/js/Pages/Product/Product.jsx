import CommonLayout from '@/Layouts/CommonLayout'
import React from 'react'

export default function Product({auth, product, categories}) {
  return (
    <CommonLayout categories={categories} pageTitle={product.name} auth={auth} >
    {/*TODO: design cart list here */}
    <h1>{product.name}</h1>
    </CommonLayout>
  )
}