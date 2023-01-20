import { Link } from '@inertiajs/inertia-react';
import route from '/vendor/tightenco/ziggy/src/js';

export default function NavLink({routeName, content, className }) {

    return (
            <Link  href={route(routeName)} className={className}>
                {content.name}
            </Link>
    )

}
