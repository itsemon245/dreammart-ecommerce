import { Link, Head } from '@inertiajs/inertia-react';
import { NavLink } from '../Components';
import route from '/vendor/tightenco/ziggy/src/js';
import SearchBox from '../Components/SearchBox/SearchBox';


export default function Welcome(props) {
    return (
        <>
            <Head title="Stylo" />
            <div>
                <nav>
                    <NavLink className="app-logo" href={route('home')}>
                        <img src="/assets/logo.svg" alt="app-logo" />
                    </NavLink>
                    <NavLink active={true} href={route('home')} >
                        Home
                    </NavLink>
                    <NavLink href={route('dashboard')} >
                        Explore
                    </NavLink>
                    <NavLink className="dropdown" href={route('dashboard')}
                    >
                        Browse
                        <ul className='dropdown-items'>
                            <li className='dropdown-item'>Featured</li>
                            <li className='dropdown-item'>Shoes</li>
                            <li className='dropdown-item'>Watches</li>
                            <li className='dropdown-item'>All</li>
                        </ul>
                    </NavLink>
                    <NavLink href={route('dashboard')} >
                        Contact Us
                    </NavLink>
                    <SearchBox />
                    {props.auth.user ? (
                        <NavLink href={route('dashboard')} >
                            Dashboard
                        </NavLink>
                    ) : (
                        <>
                            <Link href={route('login')} >
                                Log in
                            </Link>

                            <Link
                                href={route('register')}>
                                Register
                            </Link>
                        </>
                    )}
                </nav>
            </div>
        </>
    );
}
