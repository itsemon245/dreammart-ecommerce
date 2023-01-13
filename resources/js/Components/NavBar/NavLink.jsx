import { Link } from '@inertiajs/inertia-react';

export default function NavLink({ href, active, children }) {
    return (
        <Link
            id='link'
            href={href}
            className='d-inline-flex text-dark'
        >
            {children}
        </Link>
    );
}
