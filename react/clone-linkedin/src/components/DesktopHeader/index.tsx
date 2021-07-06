import React from "react";

import {
  Container,
  Wrapper,
  LinkedInIcon,
  SearchInput,
  HomeIcon,
  NotificationIcon,
  ProfileCicle,
  CareDownIcon,
} from "./styles";

const DesktopHeader: React.FC = () => {
  return (
    <Container>
      <Wrapper>
        <div className="left">
          <LinkedInIcon />
          <SearchInput placeholder="Pesquisar" />
        </div>

        <div className="right">
          <nav>
            <button className="active">
              <HomeIcon />
              <span>Inicio</span>
            </button>

            <button>
              <NotificationIcon />
              <span>Notificações</span>
            </button>

            <button>
              <ProfileCicle src="https://github.com/andsonlourenco.png" />
              <span>
                Eu <CareDownIcon />
              </span>
            </button>
          </nav>
        </div>
      </Wrapper>
    </Container>
  );
};

export default DesktopHeader;
