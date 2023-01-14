import { Link, Head } from '@inertiajs/inertia-react';
import { NavLink, NavDropdown } from '../Components/';
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
                    <NavDropdown />
                    <NavLink href={route('dashboard')} >
                        Explore
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
                            <Link id='link' href={route('login')} >
                                Log in
                            </Link>

                            <Link id='link'
                                href={route('register')}>
                                Register
                            </Link>
                        </>
                    )}
                </nav>
                <h1>Commiting for testing</h1>
            </div>
        </>
    );
}
