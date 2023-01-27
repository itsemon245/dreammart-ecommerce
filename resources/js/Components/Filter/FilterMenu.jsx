import React from 'react'
import FilterCloseBtn from './FilterCloseBtn'
import FilterCheckBoxes from './FilterCheckBoxes'

export default function FilterMenu({ closeFilterMenu, showMenu }) {
  const topics = {
    Brands: [
      'Nike',
      'Puma',
      'Gucci',
      'Addidas'
    ],
    'Categories': [
      'Fashion',
      'Wearables',
      'Accessories',
      'Toys'
    ],
    "Age": [
      'Kids',
      'Teens',
      'Adults'
    ]
  }
  return (
    <div className={`${showMenu ? "translate-x-[-4%]" : "translate-x-[-100%]"} z-10 transition-all w-48 absolute left-0 bg-base-300 rounded-r-xl pb-4`}>
      <div className='flex justify-center bg-primary text-base-100 rounded-tr-xl py-2 px-4 '>
        <h3 className='mx-auto cursor-default'>Filter</h3>
        <FilterCloseBtn closeFilterMenu={closeFilterMenu} />
      </div>
      {Object.entries(topics).map(([topic, names]) => (
        <FilterCheckBoxes topic={topic} names={names} key={Math.random() * (100 - 10) + 10} />
      ))}
      {/* <FilterCheckBoxes topic="Brands" names={['Nike', 'Gorge']} /> */}
    </div>
  )
}
