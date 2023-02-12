import React from 'react'
import FilterCloseBtn from './FilterCloseBtn'
import FilterCheckBoxes from './FilterCheckBoxes'

export default function FilterMenu({ closeFilterMenuToggler, showMenu, categories }) {
  return (
    <div className={`${showMenu ? "translate-x-[-4%]" : "translate-x-[-100%]"} z-10 transition-all w-48 absolute left-0 bg-base-300 rounded-r-xl pb-4`}>
      <div className='flex justify-center bg-primary text-base-100 rounded-tr-xl py-2 px-4 '>
        <h3 className='mx-auto cursor-default'>Filter</h3>
        <FilterCloseBtn closeFilterMenuToggler={closeFilterMenuToggler} />
      </div>
      
        <FilterCheckBoxes name='Categories' topics={categories} />
      {/* <FilterCheckBoxes topic="Brands" names={['Nike', 'Gorge']} /> */}
    </div>
  )
}
