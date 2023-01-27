import React from 'react'
import FilterCloseBtn from './FilterCloseBtn'

export default function FilterMenu({ closeFilterMenu }) {
  return (
    <div className='w-48'>
      <div className='flex justify-center bg-primary text-base-100 rounded-tr-xl py-2 px-4'>
        <h3 className='mx-auto cursor-default'>Filter</h3>
        <FilterCloseBtn closeFilterMenu={closeFilterMenu} />
      </div>
    </div>

  )
}
