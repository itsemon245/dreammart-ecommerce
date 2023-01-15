import React from 'react'

export default function Register() {
  return (
    <div>
      <form action="">
        <input type="text" name='fname' value={''} placeholder='Your first name' />
        <input type="text" name='lname' value={''} placeholder='Your last name' />
        <input type="password" name='password' value={''} placeholder='Enter password' />
        <input type="password" name='repeat-password' value={''} placeholder='Repeat password' />
      </form>
    </div>
  )
}
