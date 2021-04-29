import React from 'react';
import { Navbar, Nav, Container} from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'

class Navcontrol extends React.Component{
    render() {
        return(
            <>
            <Container>
                <Navbar fixed = "top" expand = 'lg' bg = "primary" variant = "dark">
                    <Navbar.Brand href = "/">Vacation Operation</Navbar.Brand>
                        <Nav className = "mr-auto">
                            <Nav.Link href = "/">Home</Nav.Link>
                            <Nav.Link href = "/signup">Sign Up!</Nav.Link>
                            <Nav.Link href = "/login">Log In</Nav.Link>
                        </Nav>
                </Navbar>
            </Container>
            </>
        )
    }
}

export default Navcontrol