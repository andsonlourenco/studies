import React from "react";

import { Container, ProfileCicle, SearchInput, MessageIcon } from "./styles";

const MobileHeader: React.FC = () => {
  return (
    <Container>
      <ProfileCicle src="https://github.com/andsonlourenco.png" />
      <SearchInput placeholder="Pesquisar" />
      <MessageIcon />
    </Container>
  );
};

export default MobileHeader;
